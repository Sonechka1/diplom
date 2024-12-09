<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderStrukture;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function add_employee(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:20', // добавляем валидацию для поля телефона
            'password' => 'required|string|min:8',
        ]);

        $employee = new User();
        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->phone = $request->input('phone');
        $employee->password = bcrypt($request->input('password'));
        $employee->date = now(); // Внесите изменения в это поле с вашими требованиями
        $employee->role_id = 2;
        $employee->save();
        return redirect()->back()->with('success', 'Сотрудник успешно добавлен в систему!');

    }

    public function getEmployees(Request $request)
    {
        // Выбираем только сотрудников с ролью "employee"
        $employees = User::whereHas('role', function ($query) {
            $query->where('role', 'employee');
        })->get();

        // Подсчитываем общее количество пользователей с ролью "user"
        $totalUsers = User::whereHas('role', function ($query) {
            $query->where('role', 'user');
        })->count();
        $totalOrders = Order::count();
        $totalProfits = Order::sum('cost');

        return view('admin.admin', compact('employees', 'totalUsers', 'totalOrders', 'totalProfits'));
    }

    public function index()
    {
        $orderStruktures = OrderStrukture::all(); // Получаем все заказы для отображения
        $orders = Order::with('orderStructure')->get();


        return view('infOrder', ['orderStruktures' => $orderStruktures], ['orders' => $orders]);
    }

    public function fireEmployee($userId)
    {
        $employee = User::find($userId);
        $employee->role_id = 3;
        $employee->save();

        return redirect()->back()->with('success', 'Сотрудник успешно уволен.');
    }

    public function completedOrders()
    {
        $completedOrders = Order::where('status_id', 4)
            ->with('user')
            ->get();
        return view('admin.completedOrders', compact('completedOrders'));
    }

    public function getUsers(Request $request)
    {
        // Выбираем только сотрудников с ролью "employee"
        $users = User::whereHas('role', function ($query) {
            $query->where('role', 'user');
        })->get();


        return view('client', compact('users',));
    }

}
