<!-- resources/views/login.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> <!-- Enlazar tu archivo CSS -->
</head>
<body>
    <div class="card">
        <h2>Iniciar Sesión</h2>
        <form method="POST" action="{{ url('login') }}">
            @csrf

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password" required>

            <button type="submit">Iniciar sesión</button>
        </form>
    </div>
</body>
</html>
