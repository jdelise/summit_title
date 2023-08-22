<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmitted;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

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
    public function userDashboard() {
        return view('pages.userDashboard');
    }
    public function contactFormSubmitted(Request $request) {
        $validated = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required'
        ]);
        $response = [];
        if($validated->fails()){
            array_push($response, ['message' => 'error']);
            array_push($response, ['errors' => $validated->errors()]);
            return $response;
        }
        array_push($response, ['message' => 'success']);

       
        Mail::to('joedelise@gmail.com')->send(new ContactFormSubmitted($request));
        return $response;
        //return redirect('/');
    }
    public function mailable(Request $request) {
        return new ContactFormSubmitted($request);
    }
}
