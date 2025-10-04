<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Habit Tracker - Khairan</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #2e8b57;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }
        header h1 {
            margin: 0;
            font-size: 1.5em;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-weight: 600;
            transition: 0.3s;
        }
        nav a:hover {
            color: #d4edda;
        }
        main {
            max-width: 800px;
            margin: 30px auto;
            padding: 0 20px;
        }
        h1 {
            text-align: center;
            color: #2e8b57;
        }
        .habit-list {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 20px;
        }
        .habit-card {
            background-color: white;
            padding: 15px 20px;
            border-radius: 10px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .habit-card .name {
            font-weight: 600;
            font-size: 18px;
        }
        .habit-card .streak {
            background-color: #1e90ff;
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 14px;
            margin-right: 10px;
        }
        .habit-card form button {
            background-color: #2e8b57;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }
        .habit-card form button:hover {
            background-color: #276b48;
        }
        a.button {
            display: inline-block;
            margin-top: 20px;
            background-color: #2e8b57;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 8px;
            transition: 0.3s;
        }
        a.button:hover {
            background-color: #276b48;
        }
        .message {
            background-color: #d4edda;
            color: #155724;
            padding: 10px 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
<header>
    <h1>Semangat Khairan!</h1>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('habits.index') }}">Program</a>
        <a href="{{ route('ourteam') }}">Our Team</a>
        <a href="{{ route('contact') }}">Contact</a>
    </nav>
    </nav>
</header>

<main>
    @if(session('success'))
        <div class="message">{{ session('success') }}</div>
    @endif

    <a href="{{ route('habits.create') }}" class="button">+ Tambah Habit Baru</a>

    <div class="habit-list">
        @forelse($habits as $habit)
            <div class="habit-card">
                <div class="name">{{ $habit->name }}</div>
                <div class="streak">{{ $habit->days_done }} hari</div>
                <form action="{{ route('habits.done', $habit->id) }}" method="POST">
                    @csrf
                    <button type="submit">+1 Hari</button>
                </form>
            </div>
        @empty
            <p>Belum ada habit. Yuk mulai sekarang!</p>
        @endforelse
    </div>
</main>
</body>
</html>
