<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact - Khairan Project</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; margin: 0; padding: 0; background: #f0f4f8; }
        header { background: #2e8b57; padding: 15px 30px; display: flex; justify-content: space-between; align-items: center; color: white; }
        header h1 { margin: 0; font-size: 1.5em; }
        nav a { color: white; text-decoration: none; margin-left: 20px; font-weight: 600; transition: 0.3s; }
        nav a:hover { color: #d4edda; }
        main { max-width: 800px; margin: 30px auto; padding: 0 20px; text-align: center; }
        h2 { color: #2e8b57; }
        form { display: flex; flex-direction: column; gap: 15px; max-width: 400px; margin: 20px auto; }
        input, textarea { padding: 10px; border-radius: 8px; border: 1px solid #ccc; font-size: 1em; }
        button { background: #2e8b57; color: white; padding: 10px; border: none; border-radius: 8px; cursor: pointer; transition: 0.3s; }
        button:hover { background: #276b48; }
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
</header>

<main>
    <h2>Contact Us</h2>
    <p>Kalau ada pertanyaan atau saran, isi form di bawah ini ya 👇</p>
    <form>
        <input type="text" placeholder="Nama kamu" required>
        <input type="email" placeholder="Email kamu" required>
        <textarea rows="5" placeholder="Pesan kamu..." required></textarea>
        <button type="submit">Kirim</button>
    </form>
</main>
</body>
</html>
