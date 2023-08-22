@extends('layouts.master')
@section('title', 'Success! | Summit Title')
@section('styles')
    <script defer src="https://unpkg.com/alpinejs-money@latest/dist/money.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">


@endsection
@section('content')
   <div class="flex flex-col items-center justify-center min-h-[400px] mx-auto w-full">
     <div class="bg-green-600 md:text-left p-10 rounded-lg shadow-lg text-center text-white w-1/2">
        <h2 class="mb-4 md:text-4xl text-2xl">Success!</h2>
        <p>Thank you for reaching out to us. We have successfully received your information and a member of our team will respond to your inquiry promptly.</p>
        <a href="{{route('home')}}" class="border hover:text-black inline-flex mt-4 p-2 px-4 hover:bg-white">Home</a>
     </div>
   </div>


@endsection
@section('scripts')

@endsection


