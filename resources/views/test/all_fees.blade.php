@extends('layouts.master')
@section('title', 'My Dashboard | Summit Title')
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
                        Admin Dashboard
                    </h1>
                </div>

            </div>
        </div>
    </div>
    <!-- End Hero -->
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 pb-20 space-y-8">
        <div class="flex flex-col md:flex-row md:space-x-4 mt-10">
            <div class="md:w-1/4 flex flex-col space-y-4">
                <span class="text-2xl">My Account</span>
                @if (auth()->user()->netsheets->count() > 0)
                    <a href="{{ route('sellers_net_sheet') }}"
                        class="bg-gradient-to-b from-blue-500/[.75] md:w-2/3 p-4 rounded-lg text-center text-white to-black">Create
                        a net sheet</a>
                @endif


            </div>
            <div class="md:w-3/4 flex flex-col">
                <span class="text-2xl">
                    Update Title Fees
                </span>

                <div>
                    <form action="/update-fees" method="POST" class="flex-col">
                        @csrf

                        <div class="flex flex-col gap-3">
                            @foreach ($fees as $fee)
                             <div>
                                <input type="text" name="data[{{ $fee->id }}]" value="{{ $fee->title_policy_fee }}">

                                <span>${{ number_format($fee->price_low) }}</span> -
                                <span>${{ number_format($fee->price_high) }}</span>
                             </div>
                               
                            @endforeach
                             <button type="submit" class="bg-blue-300 px-4 py-2 rounded hover:bg-blue-400">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
@section('scripts')

@endsection
