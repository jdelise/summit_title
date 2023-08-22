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
                                    @foreach ($request->except(['_token','purchase_agreement_file']) as $key=>$value)
                                        {{$key}}: {{$value}} <br>
                                    @endforeach
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