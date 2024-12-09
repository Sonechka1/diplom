<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use App\Models\Order;
use App\Models\OrderStrukture;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $user = Auth::user();
        $order = new Order();
        $order->user_id = $user->id;
        $order->email = $request->input('email');
        $order->status_id = 1;
        $order->save();
        // Создаем новую структуру заказа в таблице "struktureOrders" и заполняем её данными из запроса
        $struktureOrder = new OrderStrukture();
        $struktureOrder->fullName = $request->input('fullName');
        $struktureOrder->phone = $request->input('phone');
        $struktureOrder->startPoint = $request->input('startPoint');
        $struktureOrder->endPoint = $request->input('endPoint');
        $struktureOrder->weight = $request->input('weight');
        $struktureOrder->shippingDate = $request->input('shippingDate');
        $struktureOrder->arrivalDate = $request->input('arrivalDate');
//        $struktureOrder->currentLocation = $request->input('startPoint');
        $struktureOrder->order_id = $order->id;
        $struktureOrder->date = now();

        // Проверяем наличие данных о расстоянии
        if ($request->has('distance')) {
            // Расчет стоимости: умножаем расстояние на стоимость за километр (30 рублей) и добавляем стоимость за вес
            $cost = $request->input('distance') * 30 + $request->input('weight') * 10;
            $struktureOrder->distance = $request->input('distance');

            // Обновляем стоимость заказа
            $order->cost = $cost;
            $order->save();
        } else {
            return redirect()->back()->with('error', 'Необходимо указать расстояние');
        }

        $struktureOrder->save();
        $delivery = new Delivery();
        $delivery->order_id = $order->id;
        $delivery->currentLocation = $request->input('startPoint');
        $delivery->save();

        // Перенаправляем на страницу с информацией о созданном заказе
        return view('created', ['struktureOrder' => $struktureOrder], ['order' => $order]);
    }


    public function changeStatus(Request $request, $orderId)
    {
        $order = Order::findOrFail($orderId);
        $status_id = $request->status_id; // статус, который выбрал сотрудник
        $order->status_id = $status_id;
        if ($status_id == 4) {
            $order->date_completion = Carbon::now(); // установка текущей даты выполнения
        } else {
            $order->date_completion = null; // обнуление даты выполнения
        }
        $order->employee_id = auth()->id(); // id сотрудника, который меняет статус
        $order->save();

        return redirect()->back();
    }

    public function showAcceptedOrdersForEmployee()
    {
        $employeeId = auth()->id(); // Получаем id текущего сотрудника
        $acceptedOrders = Order::where('employee_id', $employeeId)
            ->whereIn('status_id', [2, 3]) // 2 - статус принятого заказа
            ->with('orderStructure')
            ->get();

        return view('accepted_orders', compact('acceptedOrders'));
    }

    public function updateLocation(Request $request, $id)
    {
        $delivery = new Delivery();
        $delivery->order_id = $id;
        $delivery->currentLocation = $request->input('currentLocation');
        $delivery->save();

        return redirect()->back()->with('success', 'Местоположение заказа успешно изменен!');
    }


}
