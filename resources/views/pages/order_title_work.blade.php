@extends('layouts.master')
@section('title', 'Order Title Work | Summit Title')
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
                        Order Title Work
                    </h1>
                </div>
                <!-- End Title -->

                <div class="">
                    <p class="italic text-gray-300 text-lg">
                        Please submit the form below to start a title work order.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero -->
    <div class="lg:px-8 max-w-3xl mx-auto pb-20 px-4 sm:px-6 space-y-8 mt-10">
        <form 
        method="POST" 
        action="{{route('order_title_work_post')}}"
        class="border border-gray-300 p-6 rounded-lg shadow-xl">
        @csrf
                <input type="hidden" id="street_number" name="street_number"/>
                <input type="hidden" id="route" name="route"/>
                <input type="hidden" id="unit" name="unit"/>
                <input type="hidden" id="locality" name="locality"/>
                <input type="hidden" id="administrative_area_level_1" name="administrative_area_level_1"/>
                <input type="hidden" name="zip_code" id="postal_code"/>
                <input type="hidden" name="latitude" id="latitude"/>
                <input type="hidden" name="longitude" id="longitude"/>
        <div class="flex flex-col space-y-5">
            <div>
                <label class="block mb-2 text-sm font-medium">Full Name:</label>
                            <input type="text"
                                   class="py-3  pl-7 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"
                                   placeholder="Please enter your full name"
                                   name="full_name"
                            >
            </div>
            <div class="flex flex-col md:flex-row md:space-x-4">
                <div class="md:w-1/2">
                    <label class="block mb-2 text-sm font-medium">Email Address:</label>
                    <input type="email"
                           class="py-3  pl-7 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"
                           placeholder="Please enter your email address" 
                           name="email_address"
                    >
                </div>
                <div class="md:w-1/2">
                    <label class="block mb-2 text-sm font-medium">Phone Number:</label>
                    <input type="text"
                           class="py-3  pl-7 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"
                           placeholder="Please enter your best phone number" 
                           name="phone_number"
                    >
                </div>
               
            </div>
            <div>
                
                <label class="block mb-2 text-sm font-medium">Property Address:</label>
                            <input type="text"
                                   class="py-3  pl-7 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"
                                   placeholder="Address of property" 
                                   id="autocomplete"
                            >
            </div>
        
            <div>
                <label class="block mb-2 text-sm font-medium">Estimated Closing Date:</label>
                <input type="text"
                       class="py-3  pl-7 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 flatPicker"
                       placeholder="Please enter an estimated closing date" 
                       name="closing_date"
                >
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium">Your Office Name:</label>
                            <input type="text"
                                   class="py-3  pl-7 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"
                                   placeholder="Please enter your office name"
                                   name="office_name"
                            >
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium">Purchase Agreement:</label>
                            <input type="file"
                                   class="py-3  pl-7 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"
                                   placeholder="Please enter your office name"
                                   name="purchase_agreement_file"
                            >
            </div>
            <div>
                <button type="submit" class="bg-green-500 p-3 px-5 rounded-lg text-white">Submit</button>
            </div>
        </div>
        </form>
    </div>

@endsection
@section('scripts')
<script
src="https://maps.googleapis.com/maps/api/js?&libraries=places&key=AIzaSyB7Abs3JTCXWOlXBuiu42HMgM_KE9LPdio"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr(".flatPicker", {
                altInput: true,
                altFormat: "F j, Y",
                dateFormat: "Y-m-d",
            });
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


