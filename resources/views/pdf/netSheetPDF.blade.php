<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Fonts -->

    <!-- Scripts -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio"></script>
    <title></title>
</head>
<body>
    @php
    $data = json_decode($netsheet->data);
    $date = \Carbon\Carbon::parse($data->form->closing_date);
    @endphp
    {{--{{dd($data)}}--}}
    <div style="width: 126px; margin: 0 auto">
        <img src="{{url('/')}}/images/summit_title_bw_logo.png" alt="" style="width: 100%;">
    </div>

   <h1 style="text-align: center">{{$netsheet->name}}</h1>
    <div style="border: 1px solid #ddd; border-radius: 20px; padding: 20px">
        <h3 style="margin: 0; padding: 0">Estimated Proceeds: ${{number_format($data->funds_to_seller)}}<span></span></h3>
        <hr>
        <h4 style="margin: 0">Closing Date: <span>{{$date->format('M d, Y')}}</span></h4>
        <h4 style="margin: 0">Purchase Price: <span>${{number_format($data->form->price)}}</span></h4>
        <h4 style="margin: 0">Loan Balance: <span>${{number_format($data->form->loan_balance)}}</span></h4>
        <h4 style="margin: 0">Fees: <span>${{number_format($data->totalFees)}}</span></h4>
        <h4 style="margin: 0">Net: <span>${{number_format($data->funds_to_seller)}}</span></h4>
    </div>
    <div style="border: 1px solid #ddd; border-radius: 20px; padding: 20px; margin-top: 30px">
        <h3 style="margin: 0; padding: 0">Total Closing Costs: ${{number_format($data->totalFees)}}<span></span></h3>
        <hr>
        <h4 style="margin: 0">Title Insurance: <span>${{number_format($data->fees->title_insurance)}}</span></h4>
        @foreach($data->fees->other_fees as $other_fee)
            <h4 style="margin: 0">{{$other_fee->fee_name}}: <span>${{number_format($other_fee->fee_amount)}}</span></h4>
        @endforeach
        <h4 style="margin: 0">Commission: <span>${{number_format($data->fees->commission)}}</span></h4>
        <h4 style="margin: 0">Taxes: <span>${{number_format($data->fees->taxes)}}</span></h4>
    </div>
    <div style="font-size: 10px; margin: 30px auto">
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
</body>
</html>
