<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Summit Title Company')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">
    <!-- Scripts -->

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio"></script>
@vite(['resources/css/app.css', 'resources/js/app.js'])

<!-- Styles -->

    @yield('styles')
</head>
<body class="" style="font-family: 'Poppins', sans-serif;">
@include('includes.navigation')
<!-- Page Content -->
<main>
    <header>
        <div class="absolute left-0 right-0 top-2 z-50 pt-14">

        </div>
        <div class="min-h-screen w-full min-w-full bg-black">

        </div>
    </header>
</main>
<!-- End Content -->
@include('includes.footer')
</body>

@yield('scripts')
</html>
