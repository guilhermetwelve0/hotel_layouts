<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESC - Hotel</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    </style>
</head>
<body class="landing-page">
    <header>
        <div class="logo">
            <img src="{{ asset('img/logo.png') }}" alt="ESC - Hotel">
            <h1>ESC - Hotel</h1>
        </div>
        <nav>
            <ul>
                <li><a href="home">Home</a></li>
                <li><a href="login">Login</a></li>
                <li><a href="rooms">Rooms</a></li>
                <li><a href="about">About</a></li>
                <li><a href="contact">Contact</a></li>
                <li><a href="register">Register</a></li>
            </ul>
        </nav>
    </header>
    
    <section class="content">
                <!-- Galeria de Imagens -->
                <section class="py-16">
            <div class="container mx-auto">
                <h2 class="text-3xl font-semibold text-center text-secondary mb-8">Nossas Instalações</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <!-- Adicione imagens da galeria aqui -->
                    <div class="bg-cover bg-center h-96 rounded-lg"
                        style="background-image: url('{{ asset('img/classic.jpg') }}');"></div>
                    <div class="bg-cover bg-center h-96 rounded-lg"
                        style="background-image: url('{{ asset('img/double.png') }}');"></div>
                    <div class="bg-cover bg-center h-96 rounded-lg"
                        style="background-image: url('{{ asset('img/superior.jpg') }}');"></div>
                </div>
            </div>
        </section>    </section>
    
    <footer class="sticky-footer bg-green">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright © ESC - Hotel</span>
            </div>
        </div>
    </footer>
</body>
</html>
