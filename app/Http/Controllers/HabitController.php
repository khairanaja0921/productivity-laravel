<?php

namespace App\Http\Controllers;

use App\Models\Habit;
use Illuminate\Http\Request;

class HabitController extends Controller
{
    public function index()
    {
        $habits = Habit::latest()->get();
        return view('habits.index', compact('habits'));
    }

    public function create()
    {
        // Kalau mau pakai halaman create terpisah
        return view('habits.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Habit::create($request->only('name'));

        return redirect()->route('habits.index')
                         ->with('success', 'Habit berhasil ditambahkan!');
    }

    public function done(Habit $habit)
    {
        $today = now()->toDateString();

        // Increment hari/streak hanya sekali per hari
        if ($habit->last_done != $today) {
            $habit->days_done += 1;       // increment hari
            $habit->last_done = $today;   // simpan tanggal terakhir
            $habit->save();
        }

        return redirect()->back();
    }
}
