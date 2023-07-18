<?php

namespace App\Http\Controllers;

use App\Helpers\UploadHelper;
use App\Models\StandardFee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestingController extends Controller
{
    public function uploadCSV()
    {
        $importer = new UploadHelper(storage_path() . '/app/uploads/title_fees_other.csv');
        $fees = $importer->readElements();
        //DB::table('standard_fees')->truncate();
       // dd($fees);
        foreach ($fees as $fee){
            $standardFee = new StandardFee;
            $standardFee->fee_name = $fee->fee_name;
            $standardFee->fee_amount = $fee->fee_amount;
            $standardFee->fee_category = $fee->fee_category;
            $standardFee->save();

        }

    }
}
