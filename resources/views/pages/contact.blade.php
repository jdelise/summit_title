@extends('layouts.master')
@section('title', 'Contact Us | Summit Title')
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
        <div class="flex flex-col md:flex-row">
            <div class="md:w-2/3">
                <p>
                    We’d love to hear from you. Whether you have a question about our services, need assistance or just want to talk, we're here for you. Please use the contact information or form below to reach out to us.
                </p>
                <div>
                    <form 
                          class="my-6 p-12 pb-2 border rounded shadow"
                          x-data="
                    {
                        form: {
                            name: '',
                            email: '',
                            phone: '',
                            message: ''
                        },
                        errorBag: [],
                        showMessage: false,
                        showFields: true,
                        async submitForm() {
                            this.errorBag = [];
                            let response = await fetch('/contact_form_submit', {
                                method: 'POST',
                                headers: {
                                    'Content-type': 'application/json; charset=UTF-8',
                                    'X-CSRF-TOKEN': document.head.querySelector('meta[name=csrf-token]').content
                                },
                                body: JSON.stringify(this.form),
                            });
                            if (response.ok) {
                                
                                let data = await response.json();
                                console.log(data);
                                if(data[0].message === 'success'){
                                    this.showFields = false;
                                    this.form.name= '';
                                    this.form.email= '';
                                    this.form.phone= '';
                                    this.form.message= '';
                                    this.showMessage = true;
                                }else{
                                    this.errorBag.push(data[1].errors);
                                    
                                    console.log(this.errorBag);
                                }
                                
                            } else {
                            
                                flash('Something went wrong. Please contact system admin', 'error')
                            }
    
    
    
                        },
                    }
                    " x-on:submit.prevent="submitForm">
                        
                        <div class="mb-4 sm:mb-8" x-show="showFields">
                            <label class="block mb-2 text-sm font-medium"><span class="text-red-400 mr-1">*</span>Full Name:</label>
                            <input type="text"
                                   class="py-3  pl-7 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"
                                   x-model="form.name"
                                   placeholder="Please enter your full name"
                            >

                        </div>
                        <div class="mb-4 sm:mb-8" x-show="showFields">
                            
                            <label class="block mb-2 text-sm font-medium"><span class="text-red-400 mr-1">*</span>Email:</label>
                            <input type="email"
                                   class="py-3  pl-7 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"
                                   x-model="form.email"
                                   placeholder="your-email@email.com"
                            >
                        </div>
                        <div class="mb-4 sm:mb-8" x-show="showFields">
                            <label class="block mb-2 text-sm font-medium"><span class="text-red-400 mr-1">*</span>Phone:</label>
                            <input type="text"
                                   class="py-3  pl-7 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"
                                   x-mask="(999) 999-9999"
                                   x-model="form.phone"
                                   placeholder="(555) 555-5555"
                            >

                        </div>
                        <div class="mb-4 sm:mb-8" x-show="showFields">
                            <label class="block mb-2 text-sm font-medium"><span class="text-red-400 mr-1">*</span>Message:</label>
                            <textarea type="text"
                                   class="py-3  pl-7 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"
                                   x-model="form.message"
                                   placeholder="Your message"
                            ></textarea>

                        </div>
                        <div class="mb-4 sm:mb-8" x-show="showFields">
                            <template x-for="error in errorBag[0]">
                                <span class="text-red-400 mr-1 block mb-2 text-sm font-medium" x-text="error[0]"></span>
                            </template>
                        </div>
                        <div class="mb-4 sm:mb-8 bg-green-500 text-white pt-6 p-4 relative" x-show="showMessage">
                            <button class="absolute mr-2 mt-1 right-0 top-0 z-10" x-on:click="showMessage = false">x</button>
                            Thank you for reaching out to us. We have successfully received your information and a member of our team will respond to your inquiry promptly.
                        </div>
                        <div class="mb-4 sm:mb-8 flex justify-end" x-show="showFields">

                            <button type="submit" class="bg-blue-800 px-6 py-2 rounded-full text-white">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="md:w-1/3 flex flex-col space-y-6 md:pl-10">
                <div class="flex flex-row space-y4">
                    <div class="border flex flex-col p-4 rounded-lg shadow-lg w-full">
                        <span class="font-bold mb-2 text-lg">Address:</span>
                        <span>
                            11595 N Meridian St, Suite 225<br>
                            Carmel, IN 46032
                        </span>
                        <span class="font-bold my-2 text-lg">Hours:</span>
                        <span>
                            Monday–Friday<br>
                            8:30am–5pm
                        </span>
                        <span class="font-bold my-2 text-lg">Phone:</span>
                        <span>
                            <a href="tel:3176692359">(317) 669-2359</a>
                        </span>
                    </div>
                </div>
                <div class="flex flex-row space-y4">

                </div>
                <div class="flex flex-row space-y4">

                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')

@endsection


