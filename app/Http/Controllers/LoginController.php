<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Menampilkan halaman login.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Menangani proses login.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        // Lakukan validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',


        ]);

        // Lakukan pengecekan manual, misalnya menggunakan model User
        if ($this->authenticate($request->input('email'), $request->input('password'))) {
            // Jika autentikasi berhasil, Anda dapat mengatur sesi atau tindakan lainnya
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        // Jika autentikasi gagal, kembalikan dengan pesan error
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    /**
     * Fungsi untuk melakukan otentikasi manual.
     *
     * @param string $email
     * @param string $password
     * @return bool
     */
    private function authenticate($email, $password)
    {
        // Lakukan pengecekan manual, misalnya menggunakan model User
        // Gantilah dengan logika autentikasi yang sesuai dengan kebutuhan aplikasi Anda
        // Contoh sederhana:
        // $user = User::where('email', $email)->first();
        // return $user && Hash::check($password, $user->password);

        // Di sini, contoh sederhana selalu mengembalikan true untuk tujuan demonstrasi
        return true;
    }

    /**
     * Menangani proses logout.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        // Lakukan logika logout sesuai kebutuhan aplikasi Anda
        // Misalnya, kosongkan sesi atau lakukan tindakan logout yang diperlukan

        return redirect('/');
    }
}
