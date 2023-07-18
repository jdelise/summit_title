@extends('layouts.master')
@section('title', 'Contact Us | Summit Title')
@section('styles')
    <script defer src="https://unpkg.com/alpinejs-money@latest/dist/money.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">


@endsection
@section('content')
    <!-- Hero -->
    <div class="">
        <div class="bg-gradient-to-br from-blue-600 to-black">
            <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-8">

                <!-- Title -->
                <div class="">
                    <h1 class="block font-thin text-3xl md:text-5xl text-gray-200">
                        Contact Us
                    </h1>
                </div>
                <!-- End Title -->

                <div class="">
                    <p class="italic text-gray-300 text-lg">
                        We appreciate your interest in Summit Title and look forward to connecting with you.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero -->
    <div class="max-w-[75rem] mx-auto px-4 sm:px-6 lg:px-8 pb-20 space-y-8">
        <div id="map">

        </div>
        <div class="grid grid-cols-1 sm:grid-cols-5">
            <div class="sm:col-span-3">
                <p>
                    We’d love to hear from you. Whether you have a question about our services, need assistance or just want to talk, we're here for you. Please use the contact information or form below to reach out to us.
                </p>
                <div>
                    <form action="/contact"
                          class="my-6 p-12 pb-2 border rounded shadow"
                          x-data="
                    {
                        form: {
                            name: '',
                            email: '',
                            phone: '',
                            message: ''
                        },
                        submitForm(){

                            this.showMessage = true;
                        },

                        showMessage: false
                    }
                    " x-on:submit.prevent="submitForm">

                        <div class="mb-4 sm:mb-8">
                            <label class="block mb-2 text-sm font-medium">Full Name:</label>
                            <input type="text"
                                   class="py-3  pl-7 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"
                                   x-model="form.name"
                                   placeholder="Please enter your full name"
                            >

                        </div>
                        <div class="mb-4 sm:mb-8">
                            <label class="block mb-2 text-sm font-medium">Email:</label>
                            <input type="text"
                                   class="py-3  pl-7 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"
                                   x-model="form.email"
                                   placeholder="Please enter your email address"
                            >

                        </div>
                        <div class="mb-4 sm:mb-8">
                            <label class="block mb-2 text-sm font-medium">Phone:</label>
                            <input type="text"
                                   class="py-3  pl-7 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"
                                   x-model="form.phone"
                                   placeholder="Please the best number to reach you"
                            >

                        </div>
                        <div class="mb-4 sm:mb-8">
                            <label class="block mb-2 text-sm font-medium">Message:</label>
                            <textarea type="text"
                                   class="py-3  pl-7 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"
                                   x-model="form.message"
                                   placeholder="Your message"
                            ></textarea>

                        </div>
                        <div class="mb-4 sm:mb-8 bg-green-500 text-white pt-6 p-4 relative" x-show="showMessage">
                            <button class="absolute mr-2 mt-1 right-0 top-0 z-10" x-on:click="showMessage = false">x</button>
                            Thank you for reaching out to us. We have successfully received your information and a member of our team will respond to your inquiry promptly.
                        </div>
                        <div class="mb-4 sm:mb-8 flex justify-end">

                            <button type="submit" class="bg-blue-800 px-6 py-2 rounded-full text-white">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="sm:col-span-2 sm:pl-8">
                Test
            </div>
        </div>
    </div>

@endsection
@section('scripts')

@endsection


