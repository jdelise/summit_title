@extends('layouts.master')
@section('title', 'PLEASE EDIT | Summit Title')
@section('styles')
    <script defer src="https://unpkg.com/alpinejs-money@latest/dist/money.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">


@endsection
@section('content')
    <!-- Hero -->
    <div class="">
        <div class="bg-gradient-to-b from-blue-500/[.75] to-black">
            <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-8">

                <!-- Title -->
                <div class="">
                    <h1 class="block font-thin text-3xl md:text-5xl text-gray-200">
                        User Dashboard
                    </h1>
                </div>

            </div>
        </div>
    </div>
    <!-- End Hero -->
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 pb-20 space-y-8">
        <div class="flex flex-col md:flex-row">
            <div class="md:w-1/4 flex flex-col space-y-4">
                <span>My Account</span>
                <a href="{{ route('sellers_net_sheet') }}">Create a net sheet</a>
            </div>
            <div class="md:w-3/4 flex flex-col">
                <span>
                    My Netsheets
                </span>

                <div class="grid grid-cols-1 md:grid-cols-3 space-x-4">
                @if (auth()->user()->netsheets->count() > 0)
                    @foreach (auth()->user()->netsheets as $netsheet)
                    @php
                        $data = json_decode($netsheet->data);
                    @endphp
                   
                       <div class="flex">
                            <h4>{{ $netsheet->name }}</h4>
                       </div>
                    @endforeach
                @else
                    <a href="{{ route('sellers_net_sheet') }}">Create a net sheet</a>
                @endif
                </div>
                @dd($data)
            </div>
        </div>
    </div>

@endsection
@section('scripts')

@endsection
