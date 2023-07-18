<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    function index($name) {

        if(View()->exists('pages.'. $name)){
            return view('pages.' . $name);
        }
        return redirect('');
    }
}
