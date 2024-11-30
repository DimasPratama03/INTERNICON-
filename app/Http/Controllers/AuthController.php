<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function showRegisterForm2()
    {
        return view('auth.register2');
    }

    public function showForgotPasswordForm()
    {
    return view('auth.forgot-password');
    }

    public function updatePassword(Request $request)
    {
    $request->validate([
        'username' => 'required|string',
        'new_password' => 'required|string|min:8|confirmed',
    ]);

    // $user = User::where('username', $request->username)->first();

    // if (!$user) {
    //     return redirect()->back()->withErrors(['username' => 'User  not found.']);
    // }

    // // Perbarui password
    // $user->password = bcrypt($request->new_password );
    // $user->save();

    return redirect()->route('login')->with('status', 'Password has been reset successfully. You can now log in with your new password.');
    }
}
