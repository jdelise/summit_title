<?php

namespace App\Http\Controllers;

use App\Helpers\UploadHelper;
use App\Models\StandardFee;
use App\Models\TitleFee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
    public function dumpDatabase()
    {

        $script = getcwd().'/database/dbdump.sql';
        $username = config('database.connections.mysql.username');
        $password = config('database.connections.mysql.password');
        $database = config('database.connections.mysql.database');
        $file_name = 'db_backup.sql';
        //dd(base_path('public/' . $file_name));
        $command = "mysqldump -u $username -p $password $database > $file_name";

        exec($command);
        Storage::move(base_path('database/seeders/' . $file_name), 'downloads/' . $file_name);
        //\Illuminate\Support\Facades\DB::unprepared(file_get_contents(base_path()."/public/dbdump.sql"));

    }
    public function getTitleFees() {
        $fees = TitleFee::where('transaction_type', 'purchase')->get();

        return view('test.all_fees', compact('fees'));
    }

    public function updateTitleFees(Request $request) {
        //dd($request->all());
        $map = $request->input('data', []);

        foreach($map as $id => $value){
            TitleFee::whereKey($id)->update(['title_policy_fee' => $value]);

        };

        return back()->with('status', 'Saved');
    }
}
