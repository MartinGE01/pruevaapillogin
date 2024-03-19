<?php

use Illuminate\Support\Facades\Route;

// routes/web.php

// Ruta para mostrar el formulario de inicio de sesión
Route::get('login', function () {
    return view('login');
});

// Ruta para mostrar el formulario de registro
Route::get('register', function () {
    return view('register');
});

