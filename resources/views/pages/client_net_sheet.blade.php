    @extends('layouts.master')
    @section('title', 'Seller Net Sheet | Summit Title')
    @section('styles')
        
        <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/mask@3.x.x/dist/cdn.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    @endsection
    @section('content')
        <!-- Hero -->
        <div class="">
            <div class="bg-gradient-to-b from-blue-500/[.75] to-black">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

                    <!-- Title -->
                    <div class="">
                        <h1 class="block font-thin text-3xl md:text-5xl text-gray-200">
                            Seller's Estimated Net Sheet
                        </h1>
                       
                    </div>
                    <!-- End Title -->

                    <div class="">
                        <p class="italic text-gray-300 text-lg">
                            An easy, straightforward way to estimate your net proceeds.
                        </p>
                        @auth
                        <div class="mt-3">
                            <a href="/dashboard" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">My Netsheets</a>
                        </div>
                    @else
        
                    @endauth
                    </div>
                </div>

            </div>
        </div>
        <!-- End Hero -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-20 space-y-8" x-data="netSheet()">
           
            <div class="flex flex-col md:flex-row">
                
                <div class="bg-white border md:p-10 mt-5 p-4 relative rounded-xl shadow-xl sm:mt-10 z-10 md:w-1/2">
                    <div class="mb-4 sm:mb-8">
                        <label class="block mb-2 text-sm font-medium">Property Address:</label>
                        <input type="text" id="autocomplete" x-on: show_label="false" placeholder="Address of property"
                            class="py-3  pl-7 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>

                    <div class="mb-4 sm:mb-8">
                        <label class="block mb-2 text-sm font-medium">Purchase Price:</label>
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <span class="text-gray-500 sm:text-sm">$</span>
                            </div>
                            <input type="text"
                                class="py-3  pl-7 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"
                                x-model="form.price" placeholder="0.00" x-mask:dynamic="$money($input)">
                        </div>
                    </div>
                    <div class="mb-4 sm:mb-8">

                        <label class="block mb-2 text-sm font-medium">Loan Balance:</label>
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <span class="text-gray-500 sm:text-sm">$</span>
                            </div>
                            <input type="text"
                                class="py-3  pl-7 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"
                                x-model="form.loan_balance" placeholder="0.00" x-mask:dynamic="$money($input)">
                        </div>

                    </div>
                    <div class="mb-4 sm:mb-8">

                        <label class="block mb-2 text-sm font-medium">Other Expenses (e.g. HOA fees, inspection
                            concessions):</label>
                        <template x-for="(expense, index) in form.other_expenses">
                            <div class="flex flex-col mt-2 md:flex-row space-x-2">
                                <div class="md:w-1/2">
                                    <input type="text"
                                        class="py-3  pl-7 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"
                                        x-model="expense.name" placeholder="Name of expense">
                                </div>
                                <div class="md:w-1/2 flex">
                                    <div class="relative rounded-md shadow-sm">
                                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                            <span class="text-gray-500 sm:text-sm">$</span>
                                        </div>
                                        <input type="text"
                                            class="py-3  pl-7 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"
                                            x-model="expense.amount" placeholder="0.00" x-mask:dynamic="$money($input)">
                                    </div>
                                    <button type="button" class="bg-red-500 px-3 py-2 rounded text-white"
                                        @click="removeExpense(index)">&times;</button>
                                </div>

                            </div>
                        </template>
                        <button type="button" class="bg-blue-500 mt-3 px-3 py-2 rounded text-white"
                            @click="addNewExpense()">Add Expense</button>
                    </div>
                    <div class="mb-4 sm:mb-8">

                        <label class="block mb-2 text-sm font-medium">Closing Date:</label>
                        <input type="text"
                            class="py-3  px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 flatPicker"
                            x-model="form.closing_date">

                    </div>
                    <div class="mb-4 sm:mb-8">
                        <label class="block mb-2 text-sm font-medium">Closing Fee Paid By:</label>
                        <div class="flex items-center gap-x-2">
                            <input type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                                x-model="form.feesPaidBy" value="seller">
                            <label class="block text-sm font-medium leading-6 text-gray-900">Seller</label>
                            <input type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                                x-model="form.feesPaidBy" value="split">
                            <label class="block text-sm font-medium leading-6 text-gray-900">Split</label>
                            <input type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                                x-model="form.feesPaidBy" value="buyer">
                            <label class="block text-sm font-medium leading-6 text-gray-900">Buyer</label>
                        </div>
                    </div>
                    <div class="mb-4 sm:mb-8">
                        <div class="flex items-center gap-x-2">
                            <input type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                                x-model="form.is_commission_percentage" value="no">
                            <label class="block text-sm font-medium leading-6 text-gray-900">$</label>
                            <input type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                                x-model="form.is_commission_percentage" value="yes">
                            <label class="block text-sm font-medium leading-6 text-gray-900">%</label>
                        </div>
                        <label class="block mb-2 text-sm font-medium">Listing Office Commission:</label>
                        <input type="text"
                            class="py-3  px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"
                            x-model="form.sellerCommission" x-mask:dynamic="$money($input)">
                        <label class="block my-2 text-sm font-medium">Buyer Agent Commission:</label>
                        <input type="text"
                            class="py-3  px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"
                            x-model="form.buyerCommission" x-mask:dynamic="$money($input)">
                    </div>
                    <div class="mb-4 sm:mb-8">
                        <div class="flex items-center gap-x-2">
                            <input type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                                x-model="form.is_taxes_percentage" value="no">
                            <label class="block text-sm font-medium leading-6 text-gray-900">$</label>
                            <input type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                                x-model="form.is_taxes_percentage" value="yes">
                            <label class="block text-sm font-medium leading-6 text-gray-900">%</label>
                        </div>
                        <label class="block mb-2 text-sm font-medium">Annual Taxes:</label>
                        <input type="text"
                            class="py-3  px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"
                            x-model="form.taxes" x-mask:dynamic="$money($input)">
                        <div class="flex justify-end mt-4">
                            <button type="submit" x-on:click.prevent="form.price ? retrieveFees : modal = true"
                                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Calculate</button>
                        </div>
                    </div>
                </div>
                <div x-show="hasProcessed"
                    class="bg-white border md:p-10 mt-5 p-4 relative rounded-xl shadow-xl sm:mt-10 z-10 ml-4 md:w-1/2">
                    <div class="border grid md:grid-cols-2 p-5 rounded">

                        <div class="col-md-4">
                            <h4 class="text-lg md:text-2xl text-blue-500">Seller's Proceeds</h4>
                            <h3 x-money.en-US.USD.decimal="funds_to_seller" class="text-xl md:text-3xl text-green-700">
                            </h3>
                            <span class="text-sm">Net At Closing</span>
                        </div>
                        <div class="border-left col-md-8 md:text-right">
                            <div class="grid md:grid-cols-2 mb-4 items-center">
                                <div class="col text-left">
                                    <span class="font-bold">Purchase Price:</span>
                                </div>
                                <div class="col">
                                    <span x-money.en-US.USD.decimal="parseMoney(form.price)"></span>
                                </div>
                            </div>
                            <div class="grid md:grid-cols-2 mb-4 items-center">
                                <div class="col text-left">
                                    <span class="font-bold">Loan Balance:</span>
                                </div>
                                <div class="col">
                                    <span x-money.en-US.USD.decimal="parseMoney(form.loan_balance)"></span>
                                </div>
                            </div>
                            <div class="grid md:grid-cols-2 mb-4 items-center">
                                <div class="col text-left">
                                    <span class="font-bold">Fees:</span>
                                </div>
                                <div class="col">
                                    <span x-money.en-US.USD.decimal="totalFees"></span>
                                </div>
                            </div>

                            <div class="grid md:grid-cols-2 mb-4 items-center">
                                <div class="col text-left">
                                    <span class="font-bold">Net:</span>
                                </div>
                                <div class="col">
                                    <span x-money.en-US.USD.decimal="funds_to_seller"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border grid md:grid-cols-2 p-5 rounded mt-4">
                        <div class="col-md-4">
                            <h3 class="text-lg md:text-2xl text-blue-500 pr-4">Itemized Seller Closing Fees</h3>
                            <h3 x-money.en-US.USD.decimal="totalFees" class="text-xl md:text-3xl text-red-700"></h3>
                        </div>
                        <div class="border-left col-md-8 md:text-right">
                            <div class="grid md:grid-cols-2 mb-4 items-center">
                                <div class="col text-left">
                                    <span class="font-bold">Title Insurance:</span>
                                </div>
                                <div class="col">
                                    <span x-money.en-US.USD.decimal="'-' + form.title_fee"></span>
                                </div>
                            </div>
                            <template x-for="fee in fees.other_fees">
                                <div class="grid md:grid-cols-2 mb-4 items-center">
                                    <div class="col text-left">
                                        <span x-text="fee.fee_name + ':'" class="font-bold"></span>
                                    </div>
                                    <div class="col align-self-center">
                                        <span x-money.en-US.USD.decimal="'-' + fee.fee_amount"></span>
                                    </div>
                                </div>
                            </template>
                            <template x-for="expense in fees.other_expenses">
                                <div class="grid md:grid-cols-2 mb-4 items-center">
                                    <div class="col text-left">
                                        <span class="font-bold" x-text="expense.name"></span>
                                    </div>
                                    <div class="col">
                                        <span x-money.en-US.USD.decimal="'-' + parseMoney(expense.amount)"></span>
                                    </div>
                                </div>
                            </template>

                            <div class="grid md:grid-cols-2 mb-4 items-center">
                                <div class="col text-left">
                                    <span class="font-bold">Listing Office Commission:</span>
                                </div>
                                <div class="col">
                                    <span x-money.en-US.USD.decimal="'-' + parseMoney(fees.sellerCommission)"></span>
                                </div>
                            </div>
                            <div class="grid md:grid-cols-2 mb-4 items-center">
                                <div class="col text-left">
                                    <span class="font-bold">Buyer Agent Commission:</span>
                                </div>
                                <div class="col">
                                    <span x-money.en-US.USD.decimal="'-' + parseMoney(fees.buyerCommission)"></span>
                                </div>
                            </div>
                            <div class="grid md:grid-cols-2 mb-4 items-center">
                                <div class="col text-left">
                                    <span class="font-bold">Taxes:</span>
                                </div>
                                <div class="col">
                                    <span x-money.en-US.USD.decimal="'-' + parseMoney(fees.taxes)"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border grid md:grid-cols-2 p-5 rounded mt-4 gap-6">
                        @if (Route::has('login'))
                            @auth
                                <button x-on:click="saveData = true"
                                    class="bg-blue-200 border border-blue-600 py-2 rounded text-blue-700">Save</button>
                                   
                            @else
                                <span><a class="text-blue-400 underline" href="#" x-on:click="loginModal = true">Login</a> or <a
                                        class="text-blue-400 underline" href="#" x-on:click="registerModal = true">register</a> for an
                                    account to save your net sheets</span>
                            @endauth
                        @endif



                        <a x-bind:href="'/printSellerNetSheet/' + dataSaved.id" target="_blank"
                            class="bg-gray-100 border border-black flex hover:bg-blue-200 hover:text-blue-800 items-center justify-center py-2 rounded">Print</a>

                    </div>
                    <div>
                        <p class="text-green-500" x-text="wasNetSheetSaved"></p>
                    </div>
                </div>
            </div>
            <div class="col flex-1 leading-5 p-5 space-y-3 text-center text-xs" style="">
                <p class="mb-4">
                    The Seller's Net Sheet provided on our website is intended to provide an approximate estimate of
                    potential costs associated with the sale of a property. The tool is designed to provide general
                    information and guidance only. It should not be relied upon as legal, financial, or real estate advice.
                </p>
                <p class="mb-4">
                    Please be aware that the calculations made by this tool are not guaranteed to be accurate and may vary
                    from the final closing costs. Rates, fees, costs, and figures may change based on various factors,
                    including but not limited to, fluctuations in market conditions, changes in tax laws, and updates to
                    company pricing policies.
                </p>
                <p class="mb-4">
                    We strongly recommend all users to seek professional advice and verify any figures produced by this tool
                    with an attorney, real estate agent, or financial advisor before making any decisions related to the
                    sale of a property.
                </p>
                <p class="mb-4">
                    We do not accept any liability for any loss or damage arising from the use of this tool. By using this
                    tool, you agree to indemnify and hold us harmless from and against all claims, liabilities, damages,
                    losses, or expenses arising from or related to your use of this tool.

                </p>
            </div>

            <x-popup x-show="loginModal">
                <div class="flex flex-col">
                    <h3 class="mb-4 text-2xl font-bold">Login</h3>
                    <div class="border-2 border-blue-300 p-4 rounded-lg">
                        <div class="mb-4 sm:mb-8">
                            <label class="block mb-2 text-sm font-medium">Username:</label>
                            <div class="relative mt-2 rounded-md shadow-sm">
                                <input type="text"
                                    class="py-3  pl-7 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"
                                    x-model="username" placeholder="Username" required autocomplete="username">
                            </div>
                        </div>
                        <div class="mb-4 sm:mb-8">
                            <label class="block mb-2 text-sm font-medium">Password:</label>
                            <div class="relative mt-2 rounded-md shadow-sm">
                                
                                <input type="password"
                                    class="py-3  pl-7 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"
                                    x-model="password"  required autocomplete="current-password">
                            </div>
                        </div>
                    </div>
                </div>
                <x-slot name="footer">
                    <button x-on:click="loginModal = false" type="button"
                                    class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
                    <button x-on:click="login" type="button"
                                    class="mt-3 inline-flex w-full justify-center rounded-md bg-green-500 px-3 py-2 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto mr-4">Login</button>
                    
                </x-slot>
            </x-popup> 
            <x-popup x-show="registerModal">
                <div class="flex flex-col">
                    <h3 class="mb-4 text-2xl font-bold">Register</h3>
                    <div class="border-2 border-blue-300 p-4 rounded-lg">
                        <div class="mb-4 sm:mb-8">
                            <label class="block mb-2 text-sm font-medium">Name:</label>
                            <div class="relative mt-2 rounded-md shadow-sm">
                                <input type="text"
                                    class="py-3  pl-7 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"
                                    x-model="registerName" placeholder="Username" required autofocus autocomplete="name">
                                   
                            </div>
                        </div>
                        <div class="mb-4 sm:mb-8">
                            <label class="block mb-2 text-sm font-medium">Email:</label>
                            <div class="relative mt-2 rounded-md shadow-sm">
                                <input type="text"
                                    class="py-3  pl-7 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"
                                    x-model="registerEmail" placeholder="Username" required autocomplete="username">
                            </div>
                        </div>
                        <div class="mb-4 sm:mb-8">
                            <label class="block mb-2 text-sm font-medium">Password:</label>
                            <div class="relative mt-2 rounded-md shadow-sm">
                                
                                <input type="password"
                                    class="py-3  pl-7 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"
                                    x-model="registerPassword"  required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="mb-4 sm:mb-8">
                            <label class="block mb-2 text-sm font-medium">Password:</label>
                            <div class="relative mt-2 rounded-md shadow-sm">
                                
                                <input type="password"
                                    class="py-3  pl-7 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"
                                    x-model="password_confirmation"  required autocomplete="new-password">
                            </div>
                        </div>
                    </div>
                </div>
                <x-slot name="footer">
                    <button x-on:click="registerModal = false" type="button"
                                    class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
                    <button x-on:click="register" type="button"
                                    class="mt-3 inline-flex w-full justify-center rounded-md bg-green-500 px-3 py-2 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto mr-4">Register</button>
                    
                </x-slot>
            </x-popup> 
            <x-popup x-show="modal"> 
                <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                        <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                                        </svg>
                                    </div>
                                    <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                        <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">
                                            Purchase price is mandatory!</h3>
                                        <div class="mt-2">
                                            <p class="text-sm text-gray-500">Please make your that you fill out the
                                                purchase price field.</p>
                                        </div>
                                    </div>
                <x-slot name="footer">
                    <button x-on:click="modal = false" type="button"
                                    class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Exit</button>
                </x-slot>
            </x-popup>

            <x-popup x-show="saveData">
                <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Do
                    you want to save this data?</h3>
                <div class="mt-2">
                    <p class="text-sm text-gray-500">Please enter a name for your saved seller's
                        net sheet. e.g. Property Address or Client Name</p>
                </div>
                <div class="mt-4 sm:mb-8">
                    <input type="text"
                        class="py-3  px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"
                        x-model="savedDataName">
                    

                </div>
                <x-slot name="footer">
                    <button x-on:click="saveData = false" type="button"
                    class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Exit</button>
                    @auth
                    <button x-on:click.prevent="form ? updateUserIdAndSave({{auth()->user()->id}}) : ''" type="button"
                        class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Save</button>
                    @endauth
                </x-slot>
            </x-popup>
            
        </div>

    @endsection
    @section('scripts')
        <script src="https://maps.googleapis.com/maps/api/js?&libraries=places&key=AIzaSyB7Abs3JTCXWOlXBuiu42HMgM_KE9LPdio">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script>
            flatpickr(".flatPicker", {
                altInput: true,
                altFormat: "F j, Y",
                dateFormat: "Y-m-d",
            });
            function parseMoney(money){
                var a='1,125';
                if(money === ''){
                    
                    console.log(parseInt(0, 10));
                    return parseInt(0, 10);
                }else{
                    money = money.toString().replace(/\,/g,''); // 1125, but a string, so convert it to number
                    money = parseInt(money,10);
                    console.log(money);
                    return money;
                }
            }
            function pause(milliseconds = 1000) {
                return new Promise(resolve => setTimeout(resolve, milliseconds));
            }
            let netSheet = function() {
                return {
                    username: '',
                    password: '',
                    registerName: '',
                    registerEmail: '',
                    registerPassword: '',
                    password_confirmation: '',
                    savedDataName: '',
                    funds_to_seller: '',
                    loginModal: false,
                    registerModal: false,
                    fees: {
                        sellerCommission: '',
                        buyerCommission: '',
                        taxes: '',
                    },
                    hasProcessed: false,
                    totalFees: '',
                    userId: 0,
                    form: {
                        feesPaidBy: 'seller',
                        price: '',
                        loan_balance: '',
                        other_expenses: [],
                        buyerCommission: '3',
                        sellerCommission: '3',
                        taxes: '',
                        title_fee: '',
                        total_other_fees: '',
                        fee_type: '',
                        is_taxes_percentage: 'no',
                        is_commission_percentage: 'yes',
                        closing_date: '',
                        street_number: 'No',
                        route: 'Address Given',
                        postal_code: '-',
                        latitude: '-',
                        longitude: '-',
                        locality: '-',
                        administrative_area_level_1: 'IN'
                    },
                    sumFees: function() {
                        const sumValues = obj => Object.values(this.fees.other_fees).reduce((a, b) => a + b.fee_amount,
                            0);
                        console.log(sumValues);
                    },
                    addNewExpense() {
                        this.form.other_expenses.push({

                        });
                    },
                    removeExpense(index) {
                        this.form.other_expenses.splice(index, 1);
                    },
                    async retrieveFees() {
                        if(this.form.taxes === ''){
                            this.form.taxes = 0;
                        }else{
                            console.log('emnumberpty');
                        }
                        if(this.form.loan_balance === ''){
                            this.form.loan_balance = 0;
                        }else{
                            console.log('loan');
                        }

                    
                        let response = await fetch('/calculateFees', {
                            method: 'POST',
                            headers: {
                                'Content-type': 'application/json; charset=UTF-8',
                                'X-CSRF-TOKEN': document.head.querySelector('meta[name=csrf-token]').content
                            },
                            body: JSON.stringify(this.form),
                        });
                        if (response.ok) {
                            this.fees = await response.json();
                            this.form.title_fee = this.fees.title_insurance;
                            let sum = 0;
                            let sellerFees = 0;
                            // iterate over each item in the array

                            for (let i = 0; i < this.fees.other_fees.length; i++) {

                                if (this.form.feesPaidBy === 'buyer') {
                                    if (this.fees.other_fees[i].fee_name === 'Closing Fee') {
                                        this.fees.other_fees[i].fee_amount = parseFloat(0);
                                        sum += parseFloat(0);
                                    } else {
                                        sum += parseFloat(this.fees.other_fees[i].fee_amount);
                                    }
                                } else if (this.form.feesPaidBy === 'split') {
                                    if (this.fees.other_fees[i].fee_name === 'Closing Fee') {
                                        sum += parseFloat(this.fees.other_fees[i].fee_amount / 2);
                                        this.fees.other_fees[i].fee_amount = parseFloat(this.fees.other_fees[i]
                                            .fee_amount / 2);
                                    } else {
                                        sum += parseFloat(this.fees.other_fees[i].fee_amount);
                                    }
                                } else {
                                    sum += parseFloat(this.fees.other_fees[i].fee_amount);
                                }
                            }
                            console.log(this.fees);
                            this.form.total_other_fees = sum;

                            let total_other_expenses = 0;
                            for (let i = 0; i < this.fees.other_expenses.length; i++) {
                                total_other_expenses += parseFloat(parseMoney(this.fees.other_expenses[i].amount));
                            }

                            this.totalFees = parseFloat(this.form.title_fee) + parseFloat(this.form.total_other_fees) +
                                parseFloat(parseMoney(this.fees.taxes)) + (parseFloat(parseMoney(this.fees.sellerCommission)) + parseFloat(parseMoney(this
                                    .fees.buyerCommission)) + total_other_expenses);
                            this.funds_to_seller = (parseFloat(parseMoney(this.form.price)) - parseFloat(parseMoney(this.form.loan_balance))) -
                                parseFloat(this.totalFees);
                            this.hasProcessed = true;
                            await this.submitData();
                        } else {
                            flash('Something went wrong. Please contact system admin', 'error')
                        }



                    },
                    saveData: false,
                    dataSaved: {},
                    wasNetSheetSaved: '',
                    async login() {
                        let response = await fetch('/ajax-login', {
                            method: 'POST',
                            headers: {
                                'Content-type': 'application/json; charset=UTF-8',
                                'X-CSRF-TOKEN': document.head.querySelector('meta[name=csrf-token]').content
                            },
                            body: JSON.stringify({
                                email: this.username,
                                password: this.password,
                            }),
                        });
                        if (response.ok) {
                            let userData = await response.json();
                            if(userData.message === 'success'){
                                this.userId = userData.user.id;
                                this.loginModal = false;
                                pause();
                                this.updateData();
                                console.log(userData);
                            }else{
                                this.loginModal = false;
                                flash(userData.message, 'error')
                            }
                            
                            
                            
                        } else {
                            flash('Something went wrong. Please contact system admin', 'error')
                        }
                    },
                    async register() {
                        let response = await fetch('/ajax-register', {
                            method: 'POST',
                            headers: {
                                'Content-type': 'application/json; charset=UTF-8',
                                'X-CSRF-TOKEN': document.head.querySelector('meta[name=csrf-token]').content
                            },
                            body: JSON.stringify({
                                name: this.registerName,
                                email: this.registerEmail,
                                password: this.registerPassword,
                                password_confirmation: this.password_confirmation
                            }),
                        });
                        if (response.ok) {
                            let userData = await response.json();
                            if(userData.message === 'success'){
                                this.userId = userData.user.id;
                                this.loginModal = false;
                                pause();
                                this.updateData();
                                console.log(userData);
                            }else{
                                this.loginModal = false;
                                console.log(userData.message);
                                if(userData.message.name){
                                    for (let n = 0; n < userData.message.name.length; n++) {
                                    console.log(userData.message.name[n]);
                                    flash(userData.message.name[n], 'error')
                                 }
                                }
                                if(userData.message.email){
                                    for (let i = 0; i < userData.message.email.length; i++) {
                                    console.log(userData.message.email[i]);
                                    flash(userData.message.email[i], 'error')
                                 }
                                }
                                 if(userData.message.password){
                                    for (let p = 0; p < userData.message.password.length; p++) {
                                    console.log(userData.message.password[p]);
                                    flash(userData.message.password[p], 'error')
                                 }
                                 }
                                 
                                
                            }
                            
                            
                            
                        } else {
                            flash('Something went wrong. Please contact system admin', 'error')
                        }
                    },
                    updateUserIdAndSave(user_id) {
                        this.userId = user_id;
                        this.updateData();
                    },
                    async submitData() {

                        let response = await fetch('/saveSellersNetSheet', {
                            method: 'POST',
                            headers: {
                                'Content-type': 'application/json; charset=UTF-8',
                                'X-CSRF-TOKEN': document.head.querySelector('meta[name=csrf-token]').content
                            },
                            body: JSON.stringify({
                                name: this.form.street_number + ' ' + this.form.route,
                                user_id: this.userId,
                                body: {
                                    form: this.form,
                                    funds_to_seller: this.funds_to_seller,
                                    fees: this.fees,
                                    request: this.request,
                                    savedDataName: '',
                                    totalFees: this.totalFees
                                }
                            }),
                        });
                        if (response.ok) {
                            this.dataSaved = await response.json();

                            //console.log(this.dataSaved);

                        } else {
                            flash('Something went wrong. Please contact system admin', 'error')
                        }

                    },
                    async updateData() {
                        let updatedName = '';
                        if(this.savedDataName === ''){
                            updatedName = this.form.street_number + ' ' + this.form.route;
                        }else{
                            updatedName = this.savedDataName;
                        }
                        let response = await fetch('/updateSellersNetSheet', {
                            method: 'POST',
                            headers: {
                                'Content-type': 'application/json; charset=UTF-8',
                                'X-CSRF-TOKEN': document.head.querySelector('meta[name=csrf-token]').content
                            },
                            body: JSON.stringify({
                                name: updatedName,
                                id: this.dataSaved.id,
                                user_id: this.userId,
                                body: {
                                    form: this.form,
                                    funds_to_seller: this.funds_to_seller,
                                    fees: this.fees,
                                    request: this.fees.request,
                                    totalFees: this.totalFees
                                }
                            }),
                        });
                        if (response.ok) {
                            this.dataSaved = await response.json();
                            this.saveData = false;
                            //console.log(this.dataSaved);
                            flash('Net sheet was saved successfully!', 'success');
                            pause();
                            location.assign('/edit-seller-netsheet/' + this.dataSaved.id);
                        } else {
                            flash('Something went wrong. Please contact system admin', 'error')
                        }

                    },
                    submit() {

                    },
                    modal: false,
                    init() {
                        const autocomplete = new google.maps.places.Autocomplete(
                            /** @type {HTMLInputElement} */
                            (document.getElementById('autocomplete')), {
                                types: ['geocode']
                            });
                        autocomplete.addListener('place_changed', () => {
                            const componentForm = {
                                street_number: 'short_name',
                                route: 'long_name',
                                locality: 'long_name',
                                administrative_area_level_1: 'short_name',
                                postal_code: 'short_name'
                            };
                            // Get the place details from the autocomplete object.
                            const place = autocomplete.getPlace();

                            this.form.longitude = place.geometry.location.lng();
                            this.form.latitude = place.geometry.location.lat();

                            console.log(this.form.latitude);

                            for (let i = 0; i < place.address_components.length; i++) {
                                let addressType = place.address_components[i].types[0];
                                if (componentForm[addressType]) {

                                    var val = place.address_components[i][componentForm[addressType]];
                                    console.log(addressType, val);
                                    this.form[addressType] = val;

                                }
                            }
                        });
                    }
                }
            };
        </script>

        <script>
            // [END region_geolocation]
            //google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    @endsection
