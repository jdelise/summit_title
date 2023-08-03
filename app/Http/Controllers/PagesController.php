<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    function index($name)
    {

        if (View()->exists('pages.' . $name)) {
            return view('pages.' . $name);
        }
        return redirect('');
    }
    function order_title_work()
    {
        return view('pages.order_title_work');
    }
    public function services()
    {
        return view('pages.services');
    }
    public function location()
    {
    }
    public function contact()
    {
        return view('pages.contact');
    }
    function proccess_title_work()
    {
        return view('pages.success');
    }
}
