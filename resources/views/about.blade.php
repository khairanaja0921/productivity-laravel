<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About - Motivasi Khairan</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fffaf0;
            color: #333;
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
            text-align: center;
            margin-top: 50px;
            padding: 0 20px;
        }
        main h1 {
            color: #ff4500;
            font-size: 2.5em;
        }
        main p {
            font-size: 1.2em;
            line-height: 1.6;
            margin: 20px auto;
            max-width: 600px;
        }
        main img {
            width: 250px;
            border-radius: 10px;
            margin-top: 20px;
        }
        .button-back {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            font-weight: bold;
            color: #1e90ff;
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
        <h1>Keep Going, Khairan!</h1>
        <p>Setiap usaha yang kamu lakukan, sekecil apapun, akan membuahkan hasil suatu hari nanti 🌟</p>
        <p>Percaya pada proses dan jangan takut gagal! Terus asah skill-mu, dan lihat dirimu semakin berkembang setiap hari.</p>
        <img src="https://via.placeholder.com/250x250.png?text=Khairan+Motivation" alt="Khairan Noor Fadhlillah">
        <br>
        <a href="{{ route('home') }}" class="button-back">Kembali ke Home</a>
    </main>
</body>
</html>
