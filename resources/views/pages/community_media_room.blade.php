@extends('layouts.master')
@section('title', 'Community Media Room | Summit Title')
@section('styles')
    <script defer src="https://unpkg.com/alpinejs-money@latest/dist/money.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/mask@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">


@endsection
@section('content')
    <!-- Hero -->
    <div class="">
        <div class="bg-gradient-to-br from-blue-600 to-black">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

                <!-- Title -->
                <div class="">
                    <h1 class="block font-thin text-3xl md:text-5xl text-gray-200">
                        Community Media Room
                    </h1>
                </div>
                <!-- End Title -->

                <div class="">
                    <p class="italic text-gray-300 text-lg">
                        A free, welcoming room that is a hub of creativity and collaboration!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero -->
    <div class="max-w-[75rem] mx-auto px-4 sm:px-6 lg:px-8 pb-20 space-y-8">

        <div class="flex flex-col md:flex-row mt-16 md:space-x-10 space-x-4">
            <div class="md:w-1/2">
                <h3 class="mb-6 text-3xl">Community Media Room</h3>
                <p class="leading-7 mb-4 text-lg">Welcome to Summit Title’s Community Media Room, a versatile space designed to cater to
                    Realtors, lenders, and our local community.
                    This welcoming room is a hub of creativity and collaboration, available for free use by those looking to
                    connect and engage with clients and neighbors.</p>
                <p class="leading-7 mb-4 text-lg">commitment to a dynamic atmosphere means the decor changes seasonally, ensuring every
                    visit is a fresh and inspiring experience. Whether you're a Realtor filming a video presentation, a
                    lender conducting online workshops,
                    or a member of our community seeking a space to meet and brainstorm, our Community Media Room is here to
                    support your vision and bring your ideas to life. Join us in this ever-evolving
                    space and become a part of our thriving community!</p>
                <p class="leading-7 mb-4 text-lg">
                    Please <a href="{{ route('contact') }}" class="text-blue-600 underline">contact us</a> to ensure the space is available when you need
                    it!
                </p>
            </div>
            <div class="md:w-1/2">
                <div class="">
                    <img src="/images/community_room/thumbnail_1.jpg" alt="" class="border-1 border-gray-400 mb-4 overflow-hidden rounded-lg">
                </div>
                <div class="">
                    <img src="/images/community_room/thumbnail_2.jpg" alt="" class="border-1 border-gray-400 mb-4 overflow-hidden rounded-lg">
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')

@endsection
