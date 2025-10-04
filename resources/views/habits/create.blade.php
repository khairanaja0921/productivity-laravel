<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Habit - Khairan</title>
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
            color: white;
            padding: 20px;
            text-align: center;
        }
        main {
            max-width: 500px;
            margin: 50px auto;
            padding: 0 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            padding: 30px;
        }
        h1 {
            text-align: center;
            color: #2e8b57;
            margin-bottom: 30px;
        }
        form input[type="text"], form textarea {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }
        form button {
            background-color: #2e8b57;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }
        form button:hover {
            background-color: #276b48;
        }
        a.button-back {
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            color: #2e8b57;
            font-weight: bold;
        }
    </style>
</head>
<body>
<header>
    <h1>Tambah Habit Baru</h1>
</header>

<main>
    <form action="{{ route('habits.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nama habit" required>
        <textarea name="description" placeholder="Deskripsi habit (opsional)"></textarea>
        <button type="submit">Simpan Habit</button>
    </form>
    <a href="{{ route('habits.index') }}" class="button-back">&larr; Kembali</a>
</main>
</body>
</html>
