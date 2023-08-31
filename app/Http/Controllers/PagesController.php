<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmitted;
use App\Mail\TitleOrderSubmitted;
use App\Models\Form;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
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
    function success()
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
        $form = new Form();
        $form->name = 'Contact Form Submit';
        $form->data = json_encode($request->all());
        $form->save();

        array_push($response, ['message' => 'success']);

        Mail::to('clientcare@summittitle.org')->bcc('joedelise@gmail.com')->send(new ContactFormSubmitted($request));


        return $response;
        //return redirect('/');
    }
    public function mailable(Request $request) {
        return new ContactFormSubmitted($request);
    }
    public function titleRequestFormSubmitted(Request $request) {
        $validated = $request->validate([
            'agent_name' => 'required',
            'agent_email_address' => 'required|email',
            'agent_phone_number' => 'required',
            'street_number' => 'required'
        ]);

        $file = $request->file('purchase_agreement_file');
        
        if($request->has('purchase_agreement_file')){
            if($request->file('purchase_agreement_file')->isValid()){
                $purchase_agreement_url = Storage::putFile('files', $request->file('purchase_agreement_file'));
                $request->merge(['purchase_agreement' => url('storage') . '/' .$purchase_agreement_url]);
            }else{
            
                $request->merge(['purcahse_agreement' => 'No Purchase Agreement Attached']);
            }
        }else{
            
            $request->merge(['purcahse_agreement' => 'No Purchase Agreement Attached']);
        }
        
        
        $form = new Form();
        $form->name = 'Order Title Work Form';
        $form->data = json_encode($request->except(['_token','purchase_agreement_file']));
        $form->save();

        Mail::to('clientcare@summittitle.org')->bcc('joedelise@gmail.com')->send(new TitleOrderSubmitted($request));

        return redirect()->route('success');
    }
}
