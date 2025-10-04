<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Habit; // pastikan import model

class SecretController extends Controller
{
    public function showForm()
    {
        return view('secret-login');
    }

    public function checkLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if ($username === 'khairan' && $password === 'motivation123') {
            // ambil semua habit dari database
            $habits = Habit::all();

            // kirim ke view
            return view('secret-page', compact('habits'));
        } else {
            return redirect('/secret')->with('error', 'Username atau password salah!');
        }
    }
}
