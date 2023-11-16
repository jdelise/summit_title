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
                        User Dashboard
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
                <a href="{{ route('sellers_net_sheet') }}" class="bg-gradient-to-b from-blue-500/[.75] md:w-2/3 p-4 rounded-lg text-center text-white to-black">Create a net sheet</a>
                @endif

                
            </div>
            <div class="md:w-3/4 flex flex-col">
                <span class="text-2xl">
                    My Netsheets
                </span>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                @if (auth()->user()->netsheets->count() > 0)
                    @foreach (auth()->user()->netsheets->sortDesc() as $netsheet)
                    @php
                        $data = json_decode($netsheet->data);
                        //dd($data);
                    @endphp
                   
                       <div class="relative" x-data={
                        
                       }>
                        <a href="/edit-seller-netsheet/{{$netsheet->id}}" target="_blank" class="border border-blue-300 flex flex-col hover:bg-gray-100 items-center p-2" title="Edit Netsheet">
                            <h4>{{ $netsheet->name }}</h4>
                            <span class="text-sm">Purchase Price</span>
                            <span class="text-blue-700 text-lg">${{number_format((float)str_replace(",","",$data->fees->request->price), 2, '.', ',')}}</span>
                            <span class="text-sm">Seller Net</span>
                            <span class="text-blue-700 text-lg">${{number_format((float)str_replace(",","",$data->funds_to_seller), 2, '.', ',')}}</span>
                       </a>
                       </div>
                    @endforeach
                @else
                    <a href="{{ route('sellers_net_sheet') }}" class="bg-gradient-to-b from-blue-500/[.75]  p-4 rounded-lg text-center text-white to-black">Create your first net sheet now!</a>
                @endif
                </div>
               
            </div>
        </div>
    </div>

@endsection
@section('scripts')

@endsection
