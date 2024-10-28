<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;

class LoginAndRegisterController extends Controller
{
    public function login(Request $res)
    {
        if ($res->isMethod('post')) {

            $res->validate([
                'email' => 'required|email',
                'password' => 'required',
                'captcha' => ['required', function ($attribute, $value, $fail) {
                    if ($value != session('captcha_answer')) {
                        $fail('The CAPTCHA is incorrect.');
                    }
                }]
            ]);
            
            $user = User::where('email', $res->email)->first();
            // echo Hash::make($res->password);
           // dd(Hash::check($res->password, $user->password));
            if ($user && Hash::check($res->password, $user->password)) {
               // dd(';;;');
                Auth::login($user);
                $res->session()->regenerate();

                // Redirect based on role
                switch ($user->role) {
                    case User::ROLE_ADMIN:
                        return redirect()->route('admin'); // Admin dashboard route
                    case User::ROLE_LIBRARIAN:
                        return redirect()->route('librarian'); // Librarian dashboard route
                    case User::ROLE_USER:
                        return redirect()->route('user'); // User dashboard route
                    default:
                        return redirect()->route('login'); // Default fallback route
                }
            }

            throw ValidationException::withMessages([
                'email' => ['The provided credentials do not match our records.'],
            ]);
        }
        return view('login');
    }
    public function register(Request $res)
    {
        if ($res->isMethod('POST')) {
            $validation = $res->validate([
                'name' => 'required|string|max:255',
                'phone' => 'required|string|max:15',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:4|confirmed',
                'role' => ['required', Rule::in(['1', '2', '3'])],
                'captcha' => ['required', function ($attribute, $value, $fail) {
                    if ($value != session('captcha_answer')) {
                        $fail('The CAPTCHA is incorrect.');
                    }
                }],
            ]);
            
            //$pass = md5($validation['password']);
            //dd(md5($validation['password']));
            $user = new User();
            $user->name = $validation['name'];
            $user->phone = $validation['phone'];
            $user->email = $validation['email'];
            $user->password = Hash::make($validation['password']);
            $user->role = $validation['role'];
            $user->save();
            return redirect()->route('register')->with('success', 'User registered successfully.');
        }
        return view('register');
    }
    public function admin(){
        return view('admin.dashboard');
    }
    public function librarian(){
        return view('librarian.dashboard');
    }
    public function user(){
        return view('user.dashboard');
    }
}
