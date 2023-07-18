<?php

namespace App\Http\Controllers;

use App\Models\NetSheet;
use App\Models\StandardFee;
use App\Models\TitleFee;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class SellerNetsheet extends Controller
{
    public function index(Request $request)
    {

        $data = array();
        //dd();

        return view('forms.client_net_sheet', compact('data'));
    }
    function calculateFees(Request $request) {
        $data = array();
        $data['request'] = $request->all();
        $data['title_insurance'] = $this->getTitlePremium($request->price,$request->transaction_type);

        if($request->is_commission_percentage === 'yes'){
            $data['commission'] = $this->calculateCommission($request->price, $request->commission);
        }else{
            $data['commission'] = $request->commission;
        }

        if($request->is_taxes_percentage === 'no'){
            $data['taxes'] = $this->estimateTaxes($request->taxes, $request->closing_date);
        }else{
            $taxes = ($request->price / 100) * $request->taxes;
            $data['taxes'] = $this->estimateTaxes($taxes, $request->closing_date);
        }
        $data['other_debts'] = 0;
        $data['other_fees'] = $this->getOtherFees($request->fee_type);

        return $data;
    }
    function saveSellersNetSheet(Request $request) {
        $netsheet = new NetSheet;
        $netsheet->name = $request->name;
        $netsheet->data = json_encode($request->body);
        $netsheet->save();

        return $netsheet;
    }
    public function printSellerNetSheet($id)
    {
        $netsheet = NetSheet::find($id);
        $pdf = PDF::loadView('pdf.netSheetPDF', compact('netsheet'));
        return $pdf->stream($netsheet->name . 'pdf');
    }
    public function updateSellersNetSheet(Request $request)
    {
        $netsheet = NetSheet::find($request->id);
        $netsheet->name = $request->name;
        $netsheet->data = $request->body;
        $netsheet->save();
        return $netsheet;
    }
    public function getTitlePremium($price , $transaction_type)
    {
        $fees = TitleFee::where('transaction_type', $transaction_type)->get();
        $returnPrice = 0;
         foreach ($fees as $fee){
            if($price >= $fee->price_low && $price <= $fee->price_high){
                $returnPrice = $fee->title_policy_fee;
            }elseif($price >= 1000000){
                $returnPrice = 10000;
            }
        }
        return $returnPrice;
    }
    public function getClosingFee($paid_by, $fees)
    {
        $closing_fee = $fees->where('fee_name','Closing Fee')->first();
        if ($paid_by === 'seller'){
            return number_format($closing_fee->fee_amount,2);
        }elseif ($paid_by === 'split'){
            return number_format($closing_fee->fee_amount / 2, 2);
        }
        return 0;
    }

    public function estimateTaxes($prior_year_tax,$closing_date)
    {

        $dailyTax = number_format($prior_year_tax / 365, 2);
        $dt = Carbon::parse($closing_date);
        $first_tax = Carbon::parse($dt->format('Y') . '/05/10');
        $second_tax = Carbon::parse($dt->format('Y') . '/11/10');
        $prior_year_taxes = 0;
        if ($dt->gt($first_tax)){
            if($dt->gt($second_tax)){
                $prior_year_taxes = ($dt->dayOfYear * $dailyTax) + $prior_year_tax;
            }else{
                $prior_year_taxes = ($prior_year_tax / 2) + ($dt->dayOfYear * $dailyTax);
            }

        }else{
            $prior_year_taxes =  ($dt->dayOfYear * $dailyTax) + $prior_year_tax;
        }

        return $prior_year_taxes;
    }

    public function calculateHoa($closing_date, $paidTimeFrame, $amount)
    {
        $dt = Carbon::parse($closing_date);
        $hoaFee = 0;
        if ($paidTimeFrame === 'annually'){
            $dailyFee = $amount / 365;
            $hoaFee = number_format($dt->dayOfYear * $dailyFee, 2);
        }elseif ($paidTimeFrame === 'monthly'){
            $dailyFee = $amount / 30;
            $day = $dt->toArray();
            $hoaFee = number_format($day['day'] * $dailyFee, 2);
        }

        $dt = Carbon::now();
        $last_year = $dt->format('Y') . '-12-31';

        return $hoaFee;
    }
    public function calculateCommission($purchasePrice, $rate)
    {
        return ($purchasePrice / 100) * $rate;

    }
    public function getOtherFees($fee_type)
    {
        $trans_type = '';
        if ($fee_type === 'buyer_cash'){
            $trans_type = 'Buyer Fee - Cash';
        }elseif ($fee_type === 'seller_fee'){
            $trans_type = 'Seller - Fee';
        }else{
            $trans_type = 'Buyer Fee - Mortgage';
        }


        return StandardFee::select(['fee_name','fee_amount','fee_category'])->where('fee_category', $trans_type)->get();
    }
}
