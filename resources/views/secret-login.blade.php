<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Secret Motivation</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 100px; background-color: #f8f8ff; }
        input { padding: 10px; margin: 10px; width: 200px; }
        button { padding: 10px 20px; }
        .error { color: red; }
    </style>
</head>
<body>
    <h1>Login untuk melihat pesan motivasi rahasia</h1>
    @if(session('error'))
        <p class="error">{{ session('error') }}</p>
    @endif
    <form method="POST" action="/secret">
        @csrf
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
