@extends('layouts.app')

@section('titulo', 'Inicio')

@section('contenido')

    {{-- ===== PORTADA (HERO) ===== --}}
    <section id="inicio" class="max-w-6xl mx-auto px-6 py-16 lg:py-24 grid lg:grid-cols-2 gap-12 items-center">

        {{-- Columna izquierda: textos y botones --}}
        <div>
            <p class="text-xs font-semibold tracking-[0.2em] uppercase text-vino">
                Local del buen vestir · Mary
            </p>

            <h1 class="mt-4 font-serif text-5xl lg:text-6xl font-bold leading-tight">
                Viste con <em class="text-vino">estilo</em>,<br>
                vive con confianza.
            </h1>

            <p class="mt-6 text-lg text-cafe/70 max-w-md">
                Ropa y accesorios para toda la familia, con prendas seleccionadas a mano
                y precios que te van a encantar.
            </p>

            <div class="mt-8 flex flex-wrap gap-3">
                <a href="#ofertas" class="rounded-full bg-vino px-6 py-3 text-sm font-semibold text-white hover:bg-vino/90">
                    Ver ofertas →
                </a>
                <a href="#categorias" class="rounded-full border border-cafe px-6 py-3 text-sm font-semibold hover:bg-cafe hover:text-white">
                    Explorar categorías
                </a>
            </div>
        </div>

        {{-- Columna derecha: tarjeta con el logo --}}
        <div class="relative mx-auto w-full max-w-sm">
            <div class="aspect-[4/5] rounded-t-full rounded-b-3xl bg-gradient-to-b from-[#C49A5E] to-vino shadow-2xl flex items-center justify-center">
                <div class="w-48 h-48 rounded-full bg-white shadow-lg flex items-center justify-center">
                    <span class="font-serif text-8xl font-bold text-vino">Y</span>
                </div>
            </div>

            {{-- Etiqueta flotante de arriba --}}
            <div class="absolute top-12 -right-4 rounded-xl bg-white px-4 py-3 shadow-lg">
                <p class="text-sm font-semibold">🏷️ Hasta -30%</p>
                <p class="text-xs text-cafe/60">En ofertas seleccionadas</p>
            </div>

            {{-- Etiqueta flotante de abajo --}}
            <div class="absolute bottom-16 -left-4 rounded-xl bg-white px-4 py-3 shadow-lg">
                <p class="text-sm font-semibold">✨ Nueva temporada</p>
                <p class="text-xs text-cafe/60">Prendas recién llegadas</p>
            </div>
        </div>

    </section>

        {{-- ===== BARRA DE BENEFICIOS ===== --}}
    <section class="bg-cafe text-white">
        <div class="max-w-6xl mx-auto px-6 py-4 grid grid-cols-2 md:grid-cols-4 gap-4 text-center text-sm font-medium">
            @foreach (['🚚 Envios a domicilio', '📱 Aceptamos Transferencias', '🔄 Cambios fáciles', '💬 Atención personalizada'] as $beneficio)
                <p>{{ $beneficio }}</p>
            @endforeach
        </div>
    </section>

        {{-- ===== CATEGORÍAS ===== --}}
    @php
        $categorias = [
            ['nombre' => 'Damas',      'detalle' => 'Vestidos, blusas, jeans',  'icono' => '👗', 'color' => 'from-[#D79A9A] to-[#6E2A35]'],
            ['nombre' => 'Caballeros', 'detalle' => 'Camisas, pantalones',      'icono' => '👔', 'color' => 'from-[#7C8A99] to-[#1F2933]'],
            ['nombre' => 'Niños',      'detalle' => 'Cómodos y divertidos',     'icono' => '🧸', 'color' => 'from-[#F0C27B] to-[#8A5A2B]'],
            ['nombre' => 'Accesorios', 'detalle' => 'Bolsos, cinturones y más', 'icono' => '👜', 'color' => 'from-[#C9A66B] to-[#4A3B24]'],
        ];
    @endphp

    <section id="categorias" class="max-w-6xl mx-auto px-6 py-20">
        <div class="text-center">
            <p class="text-xs font-semibold tracking-[0.2em] uppercase text-vino">Categorías</p>
            <h2 class="mt-2 font-serif text-4xl font-bold">Encuentra tu estilo</h2>
            <p class="mt-3 text-cafe/70">Todo lo que necesitas para lucir bien en cualquier ocasión.</p>
        </div>

        <div class="mt-12 grid grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($categorias as $categoria)
                <a href="#ofertas" class="group relative aspect-[3/4] overflow-hidden rounded-2xl bg-gradient-to-b {{ $categoria['color'] }} p-5 flex flex-col justify-end text-white shadow-md transition hover:-translate-y-1">
                    <span class="absolute inset-0 flex items-center justify-center text-6xl transition group-hover:scale-110">{{ $categoria['icono'] }}</span>
                    <h3 class="relative font-serif text-2xl font-bold">{{ $categoria['nombre'] }}</h3>
                    <p class="relative text-sm text-white/80">{{ $categoria['detalle'] }}</p>
                </a>
            @endforeach
        </div>
    </section>

        {{-- ===== OFERTAS ===== --}}
    <section id="ofertas" class="bg-arena">
        <div class="max-w-6xl mx-auto px-6 py-20">
            <div class="text-center">
                <p class="text-xs font-semibold tracking-[0.2em] uppercase text-vino">Ofertas</p>
                <h2 class="mt-2 font-serif text-4xl font-bold">Precios especiales</h2>
                <p class="mt-3 text-cafe/70">Aprovecha nuestras promociones antes de que se agoten.</p>
            </div>

            <div class="mt-12 grid grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($ofertas as $oferta)
                    @php
                        $precioFinal = $oferta['precio'] * (1 - $oferta['descuento'] / 100);
                    @endphp

                    <div class="overflow-hidden rounded-2xl bg-white shadow-sm">
                        <div class="relative flex h-40 items-center justify-center bg-crema text-6xl">
                            <span class="absolute left-3 top-3 rounded-full bg-vino px-2 py-1 text-xs font-semibold text-white">
                                -{{ $oferta['descuento'] }}%
                            </span>
                            {{ $oferta['icono'] }}
                        </div>

                        <div class="p-4">
                            <h3 class="font-semibold">{{ $oferta['nombre'] }}</h3>
                            <p class="mt-1">
                                <span class="font-bold text-vino">${{ number_format($precioFinal, 2) }}</span>
                                <span class="ml-1 text-sm text-cafe/50 line-through">${{ number_format($oferta['precio'], 2) }}</span>
                            </p>
                            <a href="https://wa.me/{{ config('services.whatsapp') }}?text={{ urlencode('Hola, me interesa: ' . $oferta['nombre']) }}"
                               target="_blank"
                               class="mt-4 block rounded-full border border-cafe py-2 text-center text-sm font-semibold hover:bg-cafe hover:text-white">
                                Lo quiero
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


        {{-- ===== ACERCA DE ===== --}}
    <section id="nosotros" class="max-w-6xl mx-auto px-6 py-20 grid lg:grid-cols-2 gap-12 items-center">

        {{-- Columna izquierda: cuadro con el logo --}}
        <div class="rounded-3xl bg-arena p-4">
            <div class="aspect-[4/3] rounded-2xl border border-[#C49A5E]/50 flex items-center justify-center">
                <div class="w-40 h-40 rounded-full bg-white shadow-lg flex items-center justify-center">
                    <span class="font-serif text-7xl font-bold text-vino">Y</span>
                </div>
            </div>
        </div>

        {{-- Columna derecha: texto y valores --}}
        <div>
            <p class="text-xs font-semibold tracking-[0.2em] uppercase text-vino">Acerca de</p>
            <h2 class="mt-2 font-serif text-4xl font-bold leading-tight">
                Más que una tienda, un lugar para sentirte bien
            </h2>
            <p class="mt-5 text-cafe/70">
                Yausing es el local del buen vestir de Mary. Nacimos con la idea de que vestir bien
                no tiene que ser complicado ni costoso.
            </p>
            <p class="mt-3 text-cafe/70">
                Cada prenda es elegida pensando en calidad, comodidad y estilo, y te atendemos de forma
                cercana para ayudarte a encontrar lo que buscas.
            </p>

            <div class="mt-8 grid grid-cols-3 gap-4">
                @foreach (['⭐' => 'Calidad', '💰' => 'Buen precio', '🤝' => 'Confianza'] as $icono => $valor)
                    <div class="rounded-xl border border-arena bg-white py-5 text-center shadow-sm">
                        <p class="text-2xl">{{ $icono }}</p>
                        <p class="mt-2 text-sm font-semibold">{{ $valor }}</p>
                    </div>
                @endforeach
            </div>
        </div>

    </section>

        {{-- ===== CONTACTO ===== --}}
    <section id="contacto" class="max-w-6xl mx-auto px-6 pb-20">
        <div class="rounded-3xl bg-vino p-8 lg:p-12 grid lg:grid-cols-2 gap-8 items-center text-white">
            <div>
                <h2 class="font-serif text-4xl font-bold">¡Visítanos o escríbenos!</h2>
                <p class="mt-3 text-white/80">Pregunta por tallas, colores y disponibilidad. Te respondemos rápido.</p>
                <a href="https://wa.me/{{ config('services.whatsapp') }}?text={{ urlencode('Hola, quisiera más información') }}"
                   target="_blank"
                   class="mt-6 inline-block rounded-full bg-white px-6 py-3 text-sm font-semibold text-vino hover:bg-crema">
                    💬 Escribir por WhatsApp
                </a>
            </div>

            <div class="space-y-3 text-sm">
                <p class="rounded-xl bg-white/10 px-5 py-4">📍 Dirección del local, Quito</p>
                <p class="rounded-xl bg-white/10 px-5 py-4">🕘 Lunes a sábado · 09:00 – 19:00</p>
                <p class="rounded-xl bg-white/10 px-5 py-4">📱 +593 XX XXX XXXX</p>
            </div>
        </div>
    </section>


@endsection