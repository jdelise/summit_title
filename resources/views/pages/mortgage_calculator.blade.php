@extends('layouts.master')
@section('title', 'Mortgage Calculator | Summit Title')
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
                    <h1 class="block font-thin text-3xl md:text-5xl text-gray-200 mb-3">
                        Mortgage Calculator
                    </h1>
                </div>
                <!-- End Title -->

                <div class="">
                    <p class="italic text-gray-300 text-lg">
                        Your Essential Tool for Estimating Monthly Mortgage Payments
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero -->
    <div class="max-w-[75rem] mx-auto px-4 sm:px-6 lg:px-8 pb-20 space-y-8">
        <div class="pt-6">
            <iframe
                src="https://www.mortgagecalculator.org/webmasters/?downpayment=60000&homevalue=300000&loanamount=250000&interestrate=7.25&loanterm=30&propertytax=3000&pmi=3&homeinsurance=1000&monthlyhoa=0"
                style="width: 100%; height: 1200px; border: 0;"></iframe>
            <div
                style="font-family: Arial; height: 36px; top: -36px; padding: 0 8px 0 0; box-sizing: border-box; text-align: right; background: #f6f9f9; border: 1px solid #ccc; color: #868686; line-height: 34px; font-size: 12px; position: relative;">
                <a style="color: #868686;"
                    href="https://www.mortgagecalculator.org/free-tools/javascript-mortgage-calculator.php"
                    target="_blank">Javascript Mortgage Calculator</a> by MortgageCalculator.org</div>
        </div>

    </div>

@endsection
@section('scripts')

@endsection
