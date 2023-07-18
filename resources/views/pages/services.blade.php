@extends('layouts.master')
@section('title', 'Our Services | Summit Title')
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
                        Services
                    </h1>
                </div>
                <!-- End Title -->

                <div class="">
                    <p class="italic text-gray-300 text-lg">
                        We cater to the unique needs of real estate agents, builders, and lenders.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero -->
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 pb-20 space-y-8">
        <div class="grid grid-cols-2 my-20">
            <div class="flex justify-end">
                <img src="/images/titlework.jpg" alt="" class="max-w-[33rem] rounded-xl">
            </div>
            <div class="flex items-center relative">
                <div class="bg-white border border-gray-300 max-w-[40rem] ml-[-5rem] p-16 rounded shadow-xl">
                    <h3 class="font-bold mb-4 text-3xl">Title Insurance</h3>
                    <p>We provide thorough title searches, coupled with comprehensive title insurance for your real estate transactions. Protect yourself and your clients against possible legal claims regarding the ownership of the property.</p>
                </div>
            </div>

        </div>
        <div class="py-14 m-0">
            <hr>
        </div>
        <div class="grid grid-cols-2 my-20">
            <div class="flex items-center relative">
                <div class="bg-white block border border-gray-300 max-w-[40rem] ml-[5rem] mr-[-5rem] p-16 rounded shadow-xl">
                    <h3 class="font-bold mb-4 text-3xl">Closing Services</h3>
                    <p>
                        We facilitate seamless closings, coordinating all necessary parties and paperwork. Our team will guide you through every step, ensuring all details are taken care of and the closing process is smooth and hassle-free.
                    </p>
                </div>
            </div>
            <div class="flex justify-start">
                <img src="/images/closing_table.jpg" alt="" class="max-w-[33rem] rounded-xl">
            </div>


        </div>
        <div class="py-14 m-0">
            <hr>
        </div>
        <div class="grid grid-cols-2 my-20">
            <div class="flex justify-end">
                <img src="/images/document_prep.jpg" alt="" class="max-w-[33rem] rounded-xl">
            </div>
            <div class="flex items-center relative">
                <div class="bg-white border border-gray-300 max-w-[40rem] ml-[-5rem] p-16 rounded shadow-xl">
                    <h3 class="font-bold mb-4 text-3xl">Document Preparation</h3>
                    <p>
                        Leave the complex paperwork to us. Our experts handle all necessary document preparation,
                        including deed preparation and title commitment, ensuring accuracy and legal compliance.
                    </p>
                </div>
            </div>

        </div>
        <div class="py-14 m-0">
            <hr>
        </div>
        <div class="grid grid-cols-2 my-20">
            <div class="flex items-center relative">
                <div class="bg-white block border border-gray-300 max-w-[40rem] md:ml-[5rem] mr-[-5rem] p-16 rounded shadow-xl">
                    <h3 class="font-bold mb-4 text-3xl">Consultation Services</h3>
                    <p>
                        With our extensive knowledge and experience, we provide valuable consultation services.
                        Whether you need advice on a specific transaction or guidance on the real estate market in general, we're here to help.
                    </p>
                </div>
            </div>
            <div class="flex justify-start">
                <img src="/images/consulting.jpg" alt="" class="max-w-[33rem] rounded-xl">
            </div>


        </div>
    </div>

@endsection
@section('scripts')

@endsection


