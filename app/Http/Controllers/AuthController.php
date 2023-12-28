<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
	public function register()
	{
		return view('auth/register');
	}

	public function registerSimpan(Request $request)
	{
		Validator::make($request->all(), [
			'nama' => 'required',
			'email' => 'required|email',
			'password' => 'required|confirmed'
		])->validate();

		User::create([
			'nama' => $request->nama,
			'email' => $request->email,
			'password' => Hash::make($request->password),
			'level' => 'Admin'
		]);

		return redirect()->route('login');
	}

	public function showLoginForm()
	{
		return view('auth.login');
	}

	public function login(Request $request)
	{
		$credentials = $request->only('email', 'password');

		if (Auth::attempt($credentials)) {
			// Authentication berhasil
			return redirect()->intended('/dashboard'); // Redirect ke halaman setelah login (misalnya, dashboard)
		}

		// Jika autentikasi gagal, kembalikan ke halaman login dengan pesan error
		return back()->withErrors([
			'email' => 'The provided credentials do not match our records.',
		]);
	}
	public function logout(Request $request)
	{
		Auth::guard('web')->logout();

		$request->session()->invalidate();

		return redirect('/');
	}
}
