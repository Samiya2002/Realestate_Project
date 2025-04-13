<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Creative Agency') }} | @yield('title')</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/images/favicon.png">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/css/animations.css'])
    
    <!-- Scripts -->
    @stack('head-scripts')
</head>
<body class="bg-white font-sans text-dark antialiased">
    @include('partials.header')
    
    <main>
        @yield('content')
    </main>
    
    @include('partials.footer')
    
    @vite(['resources/js/app.js']) <!-- Add this if you have JS -->
    @stack('scripts')
</body>
</html>