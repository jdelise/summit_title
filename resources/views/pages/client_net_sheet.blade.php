    @extends('layouts.master')
    @section('title', 'Seller Net Sheet | Summit Title')
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
                            Seller's Estimated Net Sheet
                        </h1>{{--
                    <h3 class="block font-medium text-gray-200 text-3xl sm:text-3xl md:text-4xl lg:text-5xl mt-6">
                        Elevating Your Real Estate Success
                    </h3>--}}
                    </div>
                    <!-- End Title -->

                    <div class="">
                        <p class="italic text-gray-300 text-lg">
                            An easy, straightforward way to estimate your closing costs.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Hero -->
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 pb-20 space-y-8" x-data="netSheet()">
            <div class="grid grid-cols-2">
                <div class="bg-white border md:p-10 mt-5 p-4 relative rounded-xl shadow-xl sm:mt-10 z-10" >
                    <div class="mb-4 sm:mb-8">
                        <label class="block mb-2 text-sm font-medium">Purchase Price:</label>
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <span class="text-gray-500 sm:text-sm">$</span>
                            </div>
                            <input type="text" class="py-3  pl-7 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"  x-model.number="form.price" placeholder="0.00">
                        </div>
                    </div>
                    <div class="mb-4 sm:mb-8">

                        <label class="block mb-2 text-sm font-medium">Loan Balance:</label>
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <span class="text-gray-500 sm:text-sm">$</span>
                            </div>
                            <input type="text" class="py-3  pl-7 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"  x-model.number="form.loan_balance" placeholder="0.00">
                        </div>

                    </div>
                    <div class="mb-4 sm:mb-8">

                        <label class="block mb-2 text-sm font-medium">Closing Date:</label>
                        <input type="text" class="py-3  px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 flatPicker"  x-model="form.closing_date" >

                    </div>
                    <div class="mb-4 sm:mb-8">
                        <div class="flex items-center gap-x-2">
                            <input type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" x-model="form.is_commission_percentage" value="no">
                            <label  class="block text-sm font-medium leading-6 text-gray-900">$</label>
                            <input  type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" x-model="form.is_commission_percentage" value="yes">
                            <label  class="block text-sm font-medium leading-6 text-gray-900">%</label>
                        </div>
                        <label class="block mb-2 text-sm font-medium">Commission:</label>
                        <input type="text" class="py-3  px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"  x-model.number="form.commission" >
                    </div>
                    <div class="mb-4 sm:mb-8">
                        <div class="flex items-center gap-x-2">
                            <input type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" x-model="form.is_taxes_percentage" value="no">
                            <label  class="block text-sm font-medium leading-6 text-gray-900">$</label>
                            <input  type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" x-model="form.is_taxes_percentage" value="yes">
                            <label  class="block text-sm font-medium leading-6 text-gray-900">%</label>
                        </div>
                        <label class="block mb-2 text-sm font-medium">Taxes:</label>
                        <input type="text" class="py-3  px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"  x-model.number="form.taxes" >
                        <div class="flex justify-end mt-4">
                            <button type="submit" x-on:click.prevent="form.price ? retrieveFees : modal = true" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Calculate</button>
                        </div>
                    </div>
                </div>
                <div x-show="hasProcessed" class="bg-white border md:p-10 mt-5 p-4 relative rounded-xl shadow-xl sm:mt-10 z-10 ml-4">
                    <div class="border grid grid-cols-2 p-5 rounded">

                        <div class="col-md-4">
                            <h4 class="text-2xl text-blue-500">Seller's Proceeds</h4>
                            <h3 x-money.en-US.USD.decimal="funds_to_seller" class="text-3xl text-green-700"></h3>
                            <span class="text-sm">Net At Close</span>
                        </div>
                        <div class="border-left col-md-8 text-right">
                            <div class="grid grid-cols-2 mb-4 items-center">
                                <div class="col text-left">
                                    <span class="font-bold">Purchase Price:</span>
                                </div>
                                <div class="col">
                                    <span x-money.en-US.USD.decimal="form.price"></span>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 mb-4 items-center">
                                <div class="col text-left">
                                    <span class="font-bold">Loan Balance:</span>
                                </div>
                                <div class="col">
                                    <span x-money.en-US.USD.decimal="form.loan_balance"></span>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 mb-4 items-center">
                                <div class="col text-left">
                                    <span class="font-bold">Fees:</span>
                                </div>
                                <div class="col">
                                    <span x-money.en-US.USD.decimal="totalFees"></span>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 mb-4 items-center">
                                <div class="col text-left">
                                    <span class="font-bold">Net:</span>
                                </div>
                                <div class="col">
                                    <span x-money.en-US.USD.decimal="funds_to_seller"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border grid grid-cols-2 p-5 rounded mt-4">
                        <div class="col-md-4">
                            <h3 class="text-2xl text-blue-500">Total Closing Costs</h3>
                            <h3 x-money.en-US.USD.decimal="totalFees" class="text-3xl text-red-700"></h3>
                        </div>
                        <div class="border-left col-md-8 text-right">
                            <div class="grid grid-cols-2 mb-4 items-center">
                                <div class="col text-left">
                                    <span class="font-bold">Title Insurance:</span>
                                </div>
                                <div class="col">
                                    <span x-money.en-US.USD.decimal="'-' + form.title_fee"></span>
                                </div>
                            </div>
                            <template x-for="fee in fees.other_fees">
                                <div class="grid grid-cols-2 mb-4 items-center">
                                    <div class="col text-left">
                                        <span x-text="fee.fee_name + ':'" class="font-bold"></span>
                                    </div>
                                    <div class="col align-self-center">
                                        <span x-money.en-US.USD.decimal="'-' + fee.fee_amount"></span>
                                    </div>
                                </div>
                            </template>
                            <div class="grid grid-cols-2 mb-4 items-center">
                                <div class="col text-left">
                                    <span class="font-bold">Commission:</span>
                                </div>
                                <div class="col">
                                    <span x-money.en-US.USD.decimal="'-' + form.commission"></span>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 mb-4 items-center">
                                <div class="col text-left">
                                    <span class="font-bold">Taxes:</span>
                                </div>
                                <div class="col">
                                    <span x-money.en-US.USD.decimal="'-' + fees.taxes"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border grid grid-cols-2 p-5 rounded mt-4 gap-6">
                        @if (Route::has('login'))
                            @auth
                            <button x-on:click="saveData = true" class="bg-blue-200 border border-blue-600 py-2 rounded text-blue-700">Save</button>
                            @else
                            <span><a class="text-blue-400 underline" href="{{route('login')}}">Login</a> or <a class="text-blue-400 underline" href="{{route('register')}}">register</a> for an account to save your net sheets</span>
                            @endauth
                        @endif



                            <a x-bind:href="'/printSellerNetSheet/' + dataSaved.id" target="_blank" class="bg-gray-100 border border-black flex hover:bg-blue-200 hover:text-blue-800 items-center justify-center py-2 rounded">Print</a>

                    </div>
                    <div>
                        <p class="text-green-500" x-text="wasNetSheetSaved"></p>
                    </div>
                </div>
            </div>
            <div class="col flex-1 leading-5 p-5 space-y-3 text-center text-xs" style="">
                <p class="mb-4">
                    The Seller's Net Sheet provided on our website is intended to provide an approximate estimate of potential costs associated with the sale of a property. The tool is designed to provide general information and guidance only. It should not be relied upon as legal, financial, or real estate advice.
                </p>
                <p class="mb-4">
                    Please be aware that the calculations made by this tool are not guaranteed to be accurate and may vary from the final closing costs. Rates, fees, costs, and figures may change based on various factors, including but not limited to, fluctuations in market conditions, changes in tax laws, and updates to company pricing policies.
                </p>
                <p class="mb-4">
                    We strongly recommend all users to seek professional advice and verify any figures produced by this tool with an attorney, real estate agent, or financial advisor before making any decisions related to the sale of a property.
                </p>
                <p class="mb-4">
                    We do not accept any liability for any loss or damage arising from the use of this tool. By using this tool, you agree to indemnify and hold us harmless from and against all claims, liabilities, damages, losses, or expenses arising from or related to your use of this tool.

                </p>
            </div>
            <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true"
                 x-show="modal">

                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                     x-transition:enter="ease-out duration-300"
                     x-transition:enter-start="opacity-0"
                     x-transition:enter-end="opacity-100"
                     x-transition:leave="ease-in duration-200"
                     x-transition:leave-start="opacity-100"
                     x-transition:leave-end="opacity-0"
                ></div>

                <div class="fixed inset-0 z-10 overflow-y-auto">
                    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                        <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg"
                             x-transition:enter="ease-out duration-300"
                             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                             x-transition:leave="ease-in duration-200"
                             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                             x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        >
                            <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                                <div class="sm:flex sm:items-start">
                                    <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                        <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                                        </svg>
                                    </div>
                                    <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                        <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Purchase price is mandatory!</h3>
                                        <div class="mt-2">
                                            <p class="text-sm text-gray-500">Please make your that you fill out the purchase price field.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                <button x-on:click="modal = false" type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Exit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true"
                 x-show="saveData">

                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                     x-transition:enter="ease-out duration-300"
                     x-transition:enter-start="opacity-0"
                     x-transition:enter-end="opacity-100"
                     x-transition:leave="ease-in duration-200"
                     x-transition:leave-start="opacity-100"
                     x-transition:leave-end="opacity-0"
                ></div>

                <div class="fixed inset-0 z-10 overflow-y-auto">
                    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                        <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg"
                             x-transition:enter="ease-out duration-300"
                             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                             x-transition:leave="ease-in duration-200"
                             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                             x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        >
                            <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                                <div class="sm:flex sm:items-start">
                                    <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                        <svg class="h-6 w-6 text-green-800" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                                        </svg>
                                    </div>
                                    <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                        <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Do you want to save this data?</h3>
                                        <div class="mt-2">
                                            <p class="text-sm text-gray-500">Please enter a name for your saved seller's net sheet. e.g. Property Address or Client Name</p>
                                        </div>
                                        <div class="mt-4 sm:mb-8">
                                            <input type="text" class="py-3  px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"  x-model="savedDataName" >

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                <button x-on:click="saveData = false" type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Exit</button>
                                <button x-on:click.prevent="form ? updateData : ''" type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
    @section('scripts')
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script>
            flatpickr(".flatPicker", {
                altInput: true,
                altFormat: "F j, Y",
                dateFormat: "Y-m-d",
            });
            function pause(milliseconds = 1000){
                return new Promise(resolve => setTimeout(resolve, milliseconds));
            }
            let netSheet = function(){
                return {
                    funds_to_seller: '',
                    fees: {},
                    hasProcessed: false,
                    savedDataName: 'Seller Net Sheet',
                    totalFees: '',
                    form: {
                        price: '',
                        loan_balance: '0.00',
                        commission: '6',
                        taxes: '0.00',
                        title_fee: '',
                        total_other_fees: '',
                        transaction_type: 'purchase',
                        is_taxes_percentage: 'no',
                        is_commission_percentage: 'yes',
                        closing_date: ''
                    },
                    sumFees: function(){
                        const sumValues = obj => Object.values(this.fees.other_fees).reduce((a, b) => a + b.fee_amount, 0);
                        console.log(sumValues);
                    },
                    async retrieveFees() {
                     let response = await fetch('/calculateFees', {
                            method: 'POST',
                            headers: {
                                'Content-type': 'application/json; charset=UTF-8',
                                'X-CSRF-TOKEN': document.head.querySelector('meta[name=csrf-token]').content
                            },
                            body: JSON.stringify(this.form),
                        });
                        if(response.ok){
                            this.fees = await response.json();
                            this.form.title_fee = this.fees.title_insurance;
                            let sum = 0;

                            // iterate over each item in the array
                            for (let i = 0; i < this.fees.other_fees.length; i++ ) {
                                sum += parseFloat(this.fees.other_fees[i].fee_amount);
                            }
                            console.log(this.fees);
                            this.form.total_other_fees = sum;
                            this.totalFees = parseFloat(this.form.title_fee) + parseFloat(this.form.total_other_fees) + parseFloat(this.fees.commission) + parseFloat(this.fees.taxes);
                            this.funds_to_seller = parseFloat(this.form.price) - (parseFloat(this.totalFees) + parseFloat(this.form.loan_balance));
                            this.hasProcessed = true;
                            await this.submitData();
                        }else{
                            flash('Something went wrong. Please contact system admin', 'error')
                        }



                    },
                    saveData: false,
                    dataSaved: {},
                    wasNetSheetSaved: '',
                    async submitData(){

                        let response = await fetch('/saveSellersNetSheet', {
                            method: 'POST',
                            headers: {
                                'Content-type': 'application/json; charset=UTF-8',
                                'X-CSRF-TOKEN': document.head.querySelector('meta[name=csrf-token]').content
                            },
                            body: JSON.stringify({
                                name: this.savedDataName,
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
                        if (response.ok){
                            this.dataSaved = await response.json();

                            console.log(this.dataSaved);

                        }else {
                            flash('Something went wrong. Please contact system admin', 'error')
                        }

                    },
                    async updateData(){

                        let response = await fetch('/updateSellersNetSheet', {
                            method: 'POST',
                            headers: {
                                'Content-type': 'application/json; charset=UTF-8',
                                'X-CSRF-TOKEN': document.head.querySelector('meta[name=csrf-token]').content
                            },
                            body: JSON.stringify({
                                name: this.savedDataName,
                                id: this.dataSaved.id,
                                body: {
                                    form: this.form,
                                    funds_to_seller: this.funds_to_seller,
                                    fees: this.fees,
                                    request: this.fees.request,
                                    totalFees: this.totalFees
                                }
                            }),
                        });
                        if (response.ok){
                            this.dataSaved = await response.json();
                            this.saveData = false;
                            console.log(this.dataSaved);
                            flash('Net sheet was saved successfully!', 'success');
                            pause();
                            location.reload();
                        }else {
                            flash('Something went wrong. Please contact system admin', 'error')
                        }

                    },
                    submit(){

                    },
                    modal: false,
                    init(){

                    }
                }
            };
        </script>
        {{-- <script
             src="https://maps.googleapis.com/maps/api/js?&libraries=places&key=AIzaSyB7Abs3JTCXWOlXBuiu42HMgM_KE9LPdio"></script>
         <script>
             const formatter = new Intl.NumberFormat('en-US', {style: 'currency', currency: 'USD'});
             const formattedNumber = new Intl.NumberFormat('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
             // This example displays an address form, using the autocomplete feature
             // of the Google Places API to help users fill in the information.

             var placeSearch, autocomplete;

             const componentForm = {
                 street_number: 'short_name',
                 route: 'long_name',
                 locality: 'long_name',
                 administrative_area_level_1: 'short_name',
                 postal_code: 'short_name'
             };

             function initialize() {
                 // Create the autocomplete object, restricting the search
                 // to geographical location types.

                 autocomplete = new google.maps.places.Autocomplete(
                     /** @type {HTMLInputElement} */(document.getElementById('autocomplete')),
                     {types: ['geocode']});
                 // When the user selects an address from the dropdown,
                 // populate the address fields in the form.
                 google.maps.event.addListener(autocomplete, 'place_changed', function () {
                     fillInAddress();
                     //HSOverlay.open(document.getElementById('hs-modal'));
                 });


             }

             // [START region_fillform]
             function fillInAddress() {
                 // Get the place details from the autocomplete object.
                 const place = autocomplete.getPlace();
                 //console.log(place);
                 document.getElementById('longitude').value = place.geometry.location.lng();
                 document.getElementById('latitude').value = place.geometry.location.lat();



                 for (var i = 0; i < place.address_components.length; i++) {
                     var addressType = place.address_components[i].types[0];
                     console.log(addressType);
                     if (componentForm[addressType]) {

                         var val = place.address_components[i][componentForm[addressType]];
                         console.log(addressType);
                         document.getElementById(addressType).value = val;
                         // jQuery('#' + addressType).val(val);

                     }
                 }
                 // HSOverlay.open(document.getElementById('hs-modal'));

             }
             function geolocate() {
                 if (navigator.geolocation) {
                     navigator.geolocation.getCurrentPosition(function (position) {
                         var geolocation = new google.maps.LatLng(
                             position.coords.latitude, position.coords.longitude);
                         autocomplete.setBounds(new google.maps.LatLngBounds(geolocation,
                             geolocation));
                     });
                 }
             }

             // [END region_geolocation]
             google.maps.event.addDomListener(window, 'load', initialize);
         </script>--}}
    @endsection


