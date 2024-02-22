<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function signUpPage():View
    {
        return \view('auth.signup');
    }

    public function register(Request $request)
    {
        $validate = $request->validate([
            'surname' => ['required'],
            'name' => ['required'],
            'patronymic' => ['nullable'],
            'email' => ['required'],
            'login' => ['required'],
            'password' => ['required'],
        ]);
        User::query()->create($validate);

        return redirect()->route('sign.in');
    }

    public function signInPage():View
    {
        return \view('auth.signin');
    }

    public function login(Request $request):RedirectResponse
    {
        $validate = $request->validate([
            'login' => ['required'],
            'password' => ['required'],
        ]);
        if (auth()->attempt($validate)){
            $request->session()->regenerate();
            return redirect('/');
        }
        return redirect('/signin');
    }
}
