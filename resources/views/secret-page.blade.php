<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Secret Motivation</title>
    <style>
        /* General Body */
        body { 
            font-family: Arial, sans-serif; 
            text-align: center; 
            margin: 0; 
            padding: 0; 
            background-color: #fff0f5; 
            color: #333; 
        }

        /* Navbar */
        nav {
            background-color: #2e8b57;
            padding: 15px 0;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
            font-size: 1.1em;
        }
        nav a:hover {
            text-decoration: underline;
        }

        /* Header */
        h1 { 
            color: #c71585; 
            margin-top: 30px;
        }

        /* Paragraphs */
        p { 
            font-size: 1.2em; 
            line-height: 1.6; 
            max-width: 600px; 
            margin: 20px auto; 
        }

        /* Table */
        table {
            border-collapse: collapse;
            margin: 30px auto;
            width: 80%;
            max-width: 800px;
        }
        table, th, td {
            border: 1px solid #2e8b57;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #2e8b57;
            color: white;
        }
        td {
            background-color: #ffe4e1;
        }

    </style>
</head>
<body>

    <!-- Navbar -->
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ url('/about') }}">About</a>
        <a href="{{ url('/secret') }}">Secret</a>
        <a href="{{ route('habits.index') }}">Habits</a>
    </nav>

    <!-- Header & Motivasi -->
    <h1>Rahasia Motivasi untuk Khairan!</h1>
    <p>Setiap usaha yang kamu lakukan, meskipun terlihat kecil, memiliki kekuatan besar untuk mengubah hidupmu. 💪</p>
    <p>Terus semangat, Khairan! Kamu luar biasa dan pasti bisa mencapai semua impianmu 🌟</p>

    <!-- Tabel Database -->
    <h2>Daftar Habits</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Days Done</th>
            <th>Last Done</th>
        </tr>
        @forelse($habits as $habit)
        <tr>
            <td>{{ $habit->id }}</td>
            <td>{{ $habit->name }}</td>
            <td>{{ $habit->description }}</td>
            <td>{{ $habit->days_done }}</td>
            <td>{{ $habit->last_done }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="5">Belum ada habit di database.</td>
        </tr>
        @endforelse
    </table>

</body>
</html>
