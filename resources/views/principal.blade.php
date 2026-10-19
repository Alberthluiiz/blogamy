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
        <div class="relative mx-auto w-full max-w-md">
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

@endsection