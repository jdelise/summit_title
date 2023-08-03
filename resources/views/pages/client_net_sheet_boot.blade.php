@extends('layouts.bootstrap')
@section('title', 'Seller Net Sheet | Summit Title')
@section('styles')
<script defer src="https://unpkg.com/alpinejs-money@latest/dist/money.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">


@endsection
@section('content')
    <div class="container my-4">
        <div class="p-5 text-center bg-dark rounded-3">
            <h1 class="text-white">Seller's Net Sheet</h1>
            <h4 class="text-primary">An easy, straightforward way to estimate your closing costs.</h4>

        </div>
    </div>
<div class="container">
    <div class="row" x-data="{
        fees: {},
        funds_to_seller: '',
        totalFees: '',
        request: {},
        hasProcessed: false,
        form: {
            full_name: '',
            street_number: '',
            street_name: '',
            zip_code: '',
            latitude: '',
            longitude: '',
            unit:  '',
            city: '',
            state: '',
            price: '',
            loan_balance: '0',
            commission: '6',
            taxes: '',
            title_fee: '',
            total_fees: '',
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
            this.fees = await (await fetch('/calculateFees', {
            method: 'POST',
            headers: {
                'Content-type': 'application/json; charset=UTF-8',
                'X-CSRF-TOKEN': document.head.querySelector('meta[name=csrf-token]').content
            },
            body: JSON.stringify(this.form),
            })).json();

            console.log(this.fees);
            this.form.title_fee = this.fees.title_insurance;
            let sum = 0;

            // iterate over each item in the array
            for (let i = 0; i < this.fees.other_fees.length; i++ ) {
            sum += parseFloat(this.fees.other_fees[i].fee_amount);
            }

            this.form.total_fees = sum;
            this.request = this.fees.request;
            console.log(this.fees);
            this.totalFees = parseFloat(this.form.title_fee) + parseFloat(this.form.total_fees) + parseFloat(this.fees.commission) + parseFloat(this.fees.taxes);
            this.funds_to_seller = parseFloat(this.form.price) - (this.totalFees + parseFloat(this.form.loan_balance));
            this.hasProcessed = true;

         },
         submit(){

         },
         modal(){
            const myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
            return myModal.show();
         },
         init(){

         }
        }"
        x-on:submit.prevent="retrieveFees"
        >
        <div class="col-md-6">
           <div class="border border-secondary rounded p-4">
            <form id="seller_net_sheet">
                {{--<div class="form-group">
                    <label for="exampleFormControlInput1" class="mb-2">Location:</label>
                    <input type="text" id="autocomplete" class="form-control" show_label="false" placeholder="Address of property" >

                </div>--}}
                <input type="hidden" x-model='form.street_number' id="street_number"/>
                <input type="hidden" x-model='form.street_name' id="route"/>
                <input type="hidden" x-model="form.unit" id="unit"/>
                <input type="hidden" x-model="form.city" id="locality"/>
                <input type="hidden" x-model="form.state" id="administrative_area_level_1"/>
                <input type="hidden" x-model="form.zip_code" name="zip_code" id="postal_code"/>
                <input type="hidden" x-model="form.latitude" name="latitude" id="latitude"/>
                <input type="hidden" x-model="form.longitude" name="longitude" id="longitude"/>
                <div class="form-group">
                    <label for="exampleFormControlInput1" class="mb-2">Offer Price:</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text text-primary">$</div>
                        </div>
                        <input type="text" class="form-control" x-model.number="form.price" >
                      </div>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" class="mb-2">Loan Balance:</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text text-primary" >$</div>
                        </div>
                        <input type="text" class="form-control " x-model.number="form.loan_balance">
                      </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1" class="mb-2">Closing Date:</label>
                    <input type="text" class="form-control flatPicker" x-model="form.closing_date">

                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1" class="mb-2">Commission:</label>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" x-model="form.is_commission_percentage"  value="no" />
                            <label class="form-check-label">$</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" x-model="form.is_commission_percentage" type="radio"  value="yes" />
                            <label class="form-check-label">%</label>
                          </div>
                    </div>
                    <div class="input-group mb-2 mr-sm-2">

                        <input type="text" class="form-control" x-model.number="form.commission">
                      </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1" class="mb-2">Taxes:</label>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" x-model="form.is_taxes_percentage"  value="no" />
                            <label class="form-check-label">$</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" x-model="form.is_taxes_percentage" type="radio"  value="yes" />
                            <label class="form-check-label">%</label>
                          </div>
                    </div>

                    <div class="input-group mb-2 mr-sm-2">
                        <input type="text" class="form-control" x-model.number="form.taxes">
                      </div>
                </div>





                <button type="submit" class="btn btn-success" x-on:click.prevent="form.price ? retrieveFees : modal">Calculate</button>
            </form>
           </div>
        </div>
        <div class="col-md-6" x-show="hasProcessed">
            <div class="px-3">
                <div class="border border-success px-2 py-3 rounded row">

                    <div class="col-md-4">
                        <h4>Seller's Net</h4>
                        <h3 x-money.en-US.USD.decimal="funds_to_seller" class="text-success"></h3>
                        <span>Net At Close</span>
                    </div>
                    <div class="border-left col-md-8 text-right">
                        <div class="row mb-1">
                            <div class="col text-left">
                                <span>Sales Price:</span>
                            </div>
                            <div class="col">
                                <span x-money.en-US.USD.decimal="form.price"></span>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col text-left">
                                <span>Loan Balance:</span>
                            </div>
                            <div class="col">
                                <span x-money.en-US.USD.decimal="form.loan_balance"></span>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col text-left">
                                <span>Fees:</span>
                            </div>
                            <div class="col">
                                <span x-money.en-US.USD.decimal="totalFees"></span>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col text-left">
                                <span>Net:</span>
                            </div>
                            <div class="col">
                                <span x-money.en-US.USD.decimal="funds_to_seller"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border border-success px-2 py-3 rounded row mt-4">
                    <div class="col-md-4">
                        <h3>Total Closing Costs</h3>
                        <h3 x-money.en-US.USD.decimal="totalFees" class="text-danger"></h3>
                    </div>
                    <div class="border-left col-md-8 text-right">
                        <div class="row mb-1">
                            <div class="col text-left">
                                <span>Title Insurance:</span>
                            </div>
                            <div class="col">
                                <span x-money.en-US.USD.decimal="'-' + form.title_fee"></span>
                            </div>
                        </div>
                        <template x-for="fee in fees.other_fees">
                            <div class="row mb-1">
                                <div class="col text-left">
                                    <span x-text="fee.fee_name + ':'"></span>
                                </div>
                                <div class="col align-self-center">
                                    <span x-money.en-US.USD.decimal="'-' + fee.fee_amount"></span>
                                </div>
                            </div>
                        </template>
                        <div class="row mb-1">
                            <div class="col text-left">
                                <span>Commission:</span>
                            </div>
                            <div class="col">
                                <span x-money.en-US.USD.decimal="'-' + fees.commission"></span>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col text-left">
                                <span>Taxes:</span>
                            </div>
                            <div class="col">
                                <span x-money.en-US.USD.decimal="'-' + fees.taxes"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border border-secondary d-flex justify-content-center mt-4 px-2 py-3 rounded row">
                    <div class="">
                        <button class="btn btn-secondary">Save</button>
                        <button class="btn btn-info ml-2">Email</button>
                        <button class="btn btn-dark ml-2">Print</button>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
           <div class="col p-5" style="font-size: .7rem">
               <p>
                   The Seller's Net Sheet provided on our website is intended to provide an approximate estimate of potential costs associated with the sale of a property. The tool is designed to provide general information and guidance only. It should not be relied upon as legal, financial, or real estate advice.
               </p>
               <p>
                   Please be aware that the calculations made by this tool are not guaranteed to be accurate and may vary from the final closing costs. Rates, fees, costs, and figures may change based on various factors, including but not limited to, fluctuations in market conditions, changes in tax laws, and updates to company pricing policies.
               </p>
               <p>
                   We strongly recommend all users to seek professional advice and verify any figures produced by this tool with an attorney, real estate agent, or financial advisor before making any decisions related to the sale of a property.
               </p>
               <p>
                   We do not accept any liability for any loss or damage arising from the use of this tool. By using this tool, you agree to indemnify and hold us harmless from and against all claims, liabilities, damages, losses, or expenses arising from or related to your use of this tool.

               </p>
           </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <h5 class="text-danger">An offer price is required!</h5>
                        <p>Please fill out the offer price field.</p>
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
        /*function modal(){
            const myModal = new bootstrap.Modal(document.getElementById('myModal'));
            myModal.show();
        }*/
    </script>
   <script
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
    </script>
@endsection
