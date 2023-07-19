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
    @yield('styles')
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->


</head>
<body class="" style="font-family: 'Poppins', sans-serif;">
@include('includes.navigation')
<!-- Page Content -->
<main>
    @yield('content')
</main>
<!-- End Content -->
@include('includes.footer')
<div x-data="
   {
    show: false,
    message: 'Test message is here!',
    type: 'success'
   }
" x-show="show" x-on:flash.window="message = $event.detail.message; show = true" x-bind:class="type === 'success' ? 'bg-green-500' : 'bg-red-500'" class="fixed m-4 p-4 right-0 rounded text-white top-0 z-50">
    <span x-text="message" class="pr-4"></span>
    <button x-on:click="show = false">&times;</button>
</div>

</body>


   @yield('scripts')

   
  


   <script>
    
    function flash(message, type){
        window.dispatchEvent(new CustomEvent('flash',{
            detail: {
                message: message,
                type: type
            }
        }));
    }
   </script>
</html>
