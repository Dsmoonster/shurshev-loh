<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function newUser(Request $request)
    {
        Validator::make($request->all(), [
            'name' => ['required', 'regex:/^[а-яА-Я -]+$/u'],
            'surname' => ['required', 'regex:/^[а-яА-Я -]+$/u'],
            'email' => ['required', 'unique:users,email', 'email'],
            'password' => ['required', 'min:6'],
            'policy' => ['accepted']
        ], [
            'required' => 'Поле :attribute является обязательным',
            'unique' => 'Поле :attribute должен быть уникальным',
            'min' => 'Поле :attribute не может меньше 6 символов',
            'regex' => 'Поле :attribute должен содержать латиницу либо крилицу',
            'email' => 'Формат :attribute не верен',
        ], [
            'name' => '"Имя"',
            'surname' => '"Фамилия"',
            'patronymic' => '"Отчество"',
            'login' => '"Логин"',
            'email' => '"Email"',
            'password' => '"Пароль"',
        ])->validate();

        User::create($request->merge([
            'password' => Hash::make($request->password)
        ])->all());

        return redirect(route('home'));

    }

    public function auth(Request $request)
    {
        Validator::make($request->all(), [
            'email' => ['required'],
            'password' => ['required'],
        ], [
            'required' => 'Поле :attribute является обязательным',
        ], [
            'login' => '"Логин"',
            'password' => '"Пароль"',
        ])->validate();

        if (Auth::attempt($request->only(['email', 'password']))) {
            return redirect(route('home'));
        }
        return back()->withErrors([
            'email' => 'Неверный логин или пароль'
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('home'));
    }
}
