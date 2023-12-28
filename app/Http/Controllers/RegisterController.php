<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth; // Import the Auth facade

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->input('nama'),
            'nama_lengkap' => $request->input('nama_lengkap'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        // Log in the user after registration
        Auth::login($user);

        // Redirect to the login page with a success message
        return redirect()->route('login')->with('success', 'Registration successful! You are now logged in.');
    }
}
