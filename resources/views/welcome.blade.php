<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body class="antialiased">

        {{-- <nav class="bg-gradient-to-r from-green-500 to-green-700 text-white shadow-lg">
            <div class="container mx-auto px-4 flex items-center justify-between h-16">
              <!-- Logo -->
              <a href="#" class="text-2xl font-bold tracking-wide hover:text-green-300">
                Nutrify
              </a>

              <!-- Menú de Navegación -->
              <div class="hidden md:flex space-x-6">
                <a href="#" class="hover:text-green-300 transition duration-300">Software y App</a>
                <a href="#" class="hover:text-green-300 transition duration-300">Clínicas y Negocios</a>
                <a href="#" class="hover:text-green-300 transition duration-300">Precios</a>
                <a href="#" class="hover:text-green-300 transition duration-300">Tutoriales</a>
                <a href="#" class="hover:text-green-300 transition duration-300">Blog</a>
                <a href="#" class="hover:text-green-300 transition duration-300">Contacto</a>
              </div>

              <!-- Botones -->
              <div class="flex items-center space-x-4">
                <a href="#" class="text-sm px-4 py-2 border border-white rounded-lg hover:bg-white hover:text-green-700 transition duration-300">
                  Iniciar Sesión
                </a>
                <a href="#" class="text-sm px-4 py-2 bg-white text-green-700 font-bold rounded-lg shadow-md hover:bg-green-300 hover:text-white transition duration-300">
                  Regístrate Gratis
                </a>
              </div>

              <!-- Menú Responsive -->
              <button class="md:hidden text-white focus:outline-none">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
              </button>
            </div>
          </nav> --}}


        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


            <div>
                <img src="{{ asset('img/imagenwelcome.jpeg') }}" alt="Imagen de bienvenida">
            </div>
        </div>
    </body>
</html>
