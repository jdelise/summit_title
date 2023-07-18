<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Test Blog')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">
    <!-- Scripts -->

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio"></script>
@vite(['resources/css/app.css', 'resources/js/app.js'])

<!-- Styles -->

</head>
<body class="" style="font-family: 'Poppins', sans-serif;">

<div class="max-w-[90rem] mx-auto border my-24 bg-gray-200 py-10 rounded">
    <div class="grid grid-cols-[1fr,auto] space-x-8">
        <div class="bg-black p-24 flex">
            <div class="flex-auto">

            </div>
        </div>
        <div class="bg-blue-500 p-24">

        </div>
    </div>
</div>

</body>

</html>
