<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class LoginAndRegisterController extends Controller
{
    public function login(Request $res)
    {
        return view('login');
    }
    public function register(Request $res)
    {
        if ($res->isMethod('POST')) {
            $validation = $res->validate([
                'name' => 'required|string|max:255',
                'phone' => 'required|string|max:15',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:8|confirmed',
                'role' => ['required', Rule::in(['1', '2', '3'])],
                'captcha' => ['required', function ($attribute, $value, $fail) {
                    if ($value != session('captcha_answer')) {
                        $fail('The CAPTCHA is incorrect.');
                    }
                }],
            ]);
            $user = new User();
            $user->name = $validation['name'];
            $user->phone = $validation['phone'];
            $user->email = $validation['email'];
            $user->password = md5($validation['password']);
            $user->role = $validation['role'];
            $user->save();
            return redirect()->route('register')->with('success', 'User registered successfully.');
        }
        return view('register');
    }
}
