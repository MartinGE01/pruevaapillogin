<!-- resources/views/register.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h2>Registro</h2>
    <form method="POST" action="{{ url('register') }}">
        @csrf

        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required>

        <label for="password_confirmation">Confirmar Contraseña:</label>
        <input type="password" name="password_confirmation" id="password_confirmation" required>

        <button type="submit">Registrarse</button>
    </form>
</body>
</html>
