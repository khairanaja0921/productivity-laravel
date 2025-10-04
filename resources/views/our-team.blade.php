<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Our Team - Khairan Project</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; margin: 0; padding: 0; background: #f0f4f8; }
        header { background: #2e8b57; padding: 15px 30px; display: flex; justify-content: space-between; align-items: center; color: white; }
        header h1 { margin: 0; font-size: 1.5em; }
        nav a { color: white; text-decoration: none; margin-left: 20px; font-weight: 600; transition: 0.3s; }
        nav a:hover { color: #d4edda; }
        main { max-width: 800px; margin: 30px auto; padding: 0 20px; text-align: center; }
        h2 { color: #2e8b57; }
        .team { display: flex; justify-content: center; gap: 30px; margin-top: 20px; flex-wrap: wrap; }
        .member { background: white; padding: 20px; border-radius: 10px; box-shadow: 0 2px 6px rgba(0,0,0,0.1); width: 200px; }
        .member img { width: 100px; border-radius: 50%; }
        .member h3 { margin: 10px 0 5px; font-size: 18px; }
        .member p { margin: 0; font-size: 14px; color: #555; }
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
    <h2>Meet Our Team</h2>
    <div class="team">
        <div class="member">
            <img src="https://via.placeholder.com/100" alt="Khairan">
            <h3>Khairan Noor</h3>
            <p>Founder</p>
        </div>
        <div class="member">
            <img src="https://via.placeholder.com/100" alt="Sari">
            <h3>Sari</h3>
            <p>Designer</p>
        </div>
        <div class="member">
            <img src="https://via.placeholder.com/100" alt="Rangga">
            <h3>Rangga</h3>
            <p>Developer</p>
        </div>
    </div>
</main>
</body>
</html>
