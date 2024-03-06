<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Blob le blog') }}</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased overflow-hidden">
        <div class="min-h-screen bg-gray-100 row">
            @include('layouts.navigation')

            <div class="col-5 p-0 border-end">
                <!-- Page Heading -->
                @if (isset($header))
                    <header class="">
                        <div class="bg-white border-bottom">
                            {{ $header }}
                        </div>
                    </header>
                @endif

                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
            </div>

            <footer class="bg-white border-b border-gray-100 col-4 p-0">
                <div class="d-flex flex-column text-muted p-6">
                    <a href="#" class="link-underline-secondary">Conditions d'utilisation</a>
                    <a href="#" class="link-underline-secondary">Politique de Confidentialité</a>
                    <a href="#" class="link-underline-secondary">Mentions légales</a>
                    <a href="#" class="link-underline-secondary">À propos</a>
                    <span class="text-xs">© 2023 - 2023 www.blobleblog.com - Tous droits réservés.</span>
                </div>
            </footer>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
