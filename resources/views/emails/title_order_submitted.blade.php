@extends('emails.master')

@section('content')
<table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation"
style="width:100%;">
<tbody>
    <tr>
        <td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;">
            <!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:600px;" ><![endif]-->
            <div class="mj-column-per-100 mj-outlook-group-fix"
                style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                <table border="0" cellpadding="0" cellspacing="0" role="presentation"
                    style="vertical-align:top;" width="100%">
                    <tbody>
                        <tr>
                            <td align="center" style="padding: 0 0 20px 0">
                                <img src="{{url('/')}}/images/summit_title_bw_logo.png" alt="" style="width: 300px;">
                                
                            </td>
                        </tr>
                       
                        <tr>
                            <td align="center"
                                style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                <p
                                    style="border-top:solid 4px #000000;font-size:1px;margin:0px auto;width:100%;">
                                </p>
                                <!--[if mso | IE]><table align="center" border="0" cellpadding="0" cellspacing="0" style="border-top:solid 4px #000000;font-size:1px;margin:0px auto;width:550px;" role="presentation" width="550px" ><tr><td style="height:0;line-height:0;"> &nbsp;
</td></tr></table><![endif]-->
                            </td>
                        </tr>
                    
                        <tr>
                            <td align="left"
                                style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                <div
                                    style="font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:15px;font-weight:500;line-height:2;text-align:left;color:#000000;">
                                    <h2>A new title order has been submitted!</h2>
                                    <p>
                                        Street Number: {{$request->street_number}} <br>
                                        Street Name: {{$request->route}} <br>
                                        Unit: {{$request->unit}} <br>
                                        City: {{$request->locality}} <br>
                                        State: {{$request->administrative_area_level_1}} <br>
                                        Zip Code: {{$request->zip_code}} <br>
                                        Agent Name: {{$request->agent_name}} <br>
                                        Agent Email: {{$request->agent_email_address}} <br>
                                        Agent Phone: {{$request->agent_phone_number}} <br>
                                        Closing Date: {{$request->closing_date}} <br>
                                        Buyer Agent Name: {{$request->buyer_agent_name}} <br>
                                        Buyer Agent Email: {{$request->buyer_agent_email_address}} <br>
                                        Buyer Agent Phone: {{$request->buyer_agent_phone_number}} <br>
                                        Buyer Agent Office: {{$request->buyer_agent_office_name}} <br>
                                        Lender Name: {{$request->lender_name}} <br>
                                        Lender Email: {{$request->lender_email_address}} <br>
                                        Lender Phone Number: {{$request->lender_phone_number}} <br>
                                        Attached File: {{$request->lender_phone_number}} <br>
                                        @if ($request->purchase_agreement === 'No Purchase Agreement Attached')
                                        No Purchase Agreement Attached
                                        @else
                                        <a href="{{$request->purchase_agreement}}">Purchase Agreement</a>
                                        @endif
                                    </p>
                                </div>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            <!--[if mso | IE]></td></tr></table><![endif]-->
        </td>
    </tr>
</tbody>
</table>
@endsection