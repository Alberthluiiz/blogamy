<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yausing · @yield('titulo', 'Local del buen vestir')</title>
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600|playfair-display:700,700i" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="bg-crema text-cafe font-sans antialiased">
    <header class="sticky top-0 z-50 bg-crema/90 backdrop-blur border-b border-arena">
        <nav class="max-w-6xl mx-auto flex items-center justify-between px-6 py-4">
            <a href="{{ route('principal') }}">
                <img src="{{ asset('img/yausig.png') }}" alt="Yausing" class="h-9">
            </a>
            <div class="hidden sm:flex gap-8 text-sm font-medium">
                <a href="#inicio" class="hover:text-vino">Inicio</a>
                <a href="#categorias" class="hover:text-vino">Categorías</a>
                <a href="#ofertas" class="hover:text-vino">Ofertas</a>
                <a href="#nosotros" class="hover:text-vino">Nosotros</a>
                <a href="#contacto" class="hover:text-vino">Contacto</a>
            </div>
        </nav>
    </header>

    <main>
        @yield('contenido')
    </main>

    <footer class="border-t border-arena">
        <div class="max-w-6xl mx-auto flex justify-between px-6 py-6 text-sm">
            <span class="font-serif font-bold">Yausing</span>
            <span>© {{ date('Y') }} Yausing · Todos los derechos reservados</span>
        </div>
    </footer>
</body>
</html>
