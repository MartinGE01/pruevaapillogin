<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> <!-- Enlazar tu archivo CSS -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="{{ url('login') }}" method="POST" class="sign-in-form">
                    @csrf
                    <h2 class="title">Inicio de sesion</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Username" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required />
                    </div>
                    <input type="submit" value="Login" class="btn solid" />
                    <p class="social-text">iniciar sesion con </p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>

                <!-- Formulario de registro -->
                <form action="{{ url('register') }}" method="POST" class="sign-up-form">
                    @csrf
                    <h2 class="title">Sign Up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Username" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required />
                    </div>
                    <input type="submit" value="Sign Up" class="btn solid" />
                    <p class="social-text">Or Sign up with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                <h3>¡Bienvenido a Pos ECommerce!</h3>
<p>Descubre un mundo de posibilidades infinitas para tu negocio. Únete a nuestra comunidad hoy mismo y comienza tu viaje hacia el éxito. ¡No esperes más para hacer realidad tus sueños empresariales!</p>

                    <button class="btn transparent" id="sign-up-btn">Registrarse</button>

<script>
    // Obtener el botón por su ID
    var signUpButton = document.getElementById('sign-up-btn');

    // Agregar un evento de clic al botón
    signUpButton.addEventListener('click', function() {
        // Redirigir a la página de registro
        window.location.href = "{{ route('register') }}";
    });
</script>

                </div>
                <img src="{{ asset('images/log.png') }}" class="image" alt="">

            
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio minus natus est.</p>
                    
                    <button class="btn transparent" id="sign-in-btn">Sign In</button>
                </div>
                <img src="./img/register.svg" class="image" alt="">
            </div>
        </div>
    </div>
    <script src="./app.js"></script>
</body>
</html>
