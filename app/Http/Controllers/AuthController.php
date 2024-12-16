<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // Untuk hashing password
use App\Models\User; // Pastikan namespace model User benar

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Menampilkan halaman register
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Proses registrasi
    public function submitRegister(Request $request)
    {
        do {
            $randomId = rand(100000, 999999);
        } while (User::where('id', $randomId)->exists());

        $user = new User();
        $user->id = $randomId;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->password = bcrypt($request->password);
        $user->agency_name = $request->agency_name;
        $user->major = $request->major;
        $user->internship_start_date = $request->internship_start_date;
        $user->internship_end_date = $request->internship_end_date;
        $user->role = 'user';  // Tetapkan 'user' sebagai default role
        $user->save();
        //dd($user);
        return redirect()->route('login');
    }

    // Menampilkan halaman lupa password
    public function showForgotPasswordForm()
    {
        return view('auth.forgot-password');
    }

    // Proses reset password
    public function updatePassword(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'username' => 'required|string',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        // Cari user berdasarkan username
        $user = User::where('username', $validated['username'])->first();

        // Jika user tidak ditemukan
        if (!$user) {
            return redirect()->back()->withErrors(['username' => 'User not found.']);
        }

        // Perbarui password
        $user->password = Hash::make($validated['new_password']);
        $user->save();

        // Redirect dengan pesan sukses
        return redirect()->route('login')->with('status', 'Password has been reset successfully. You can now log in with your new password.');
    }
}
