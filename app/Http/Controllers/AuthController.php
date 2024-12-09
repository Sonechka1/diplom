<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    ///регистрация
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function processRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|string|email|max:50|unique:users',
            'phone' => 'required|string|max:10',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->password = bcrypt($request->input('password'));
        $user->date = now();
        $user->role_id = 3;
        $user->save();

        Auth::login($user);
        return redirect('/persanalCab');
    }


    ///вход
    public function showLoginForm()
    {
        return view('/login');
    }

    public function processLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);


        if (Auth::attempt($credentials)) {


            return redirect('/persanalCab'); // Перенаправляем в личный кабинет


        } else {
            // Если аутентификация не удалась, возвращаем пользователя на страницу входа с ошибкой
            return back()->withErrors(['email' => 'Неверный email или пароль']);
        }

    }

    //выход
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}

