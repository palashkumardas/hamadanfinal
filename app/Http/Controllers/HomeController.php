<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Contact;
use App\Models\PrivacyPolicy;
use App\Models\TermsConditions;
use App\Models\CookiesPolicy;
use Mail;
use App\Mail\CustomEmail;
use App\Models\WebContact;
use Response;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    
    public function about()
    {
        $about = About::get()->first();
        return view('frontend.pages.about', compact('about')); 
    }

    
    public function contact()
    {
        $contact = Contact::get()->first();
        return view('frontend.pages.contact', compact('contact')); 
    }

        
    
    public function privacy()
    {
        $privacy = PrivacyPolicy::get()->first();
        return view('layouts.privacy_policy', compact('privacy'));
    }
        
    
    public function terms()
    {
        $terms = TermsConditions::get()->first();
        return view('layouts.terms_condition', compact('terms'));
    }        
    
    public function cookies()
    {
        $cookies = CookiesPolicy::get()->first();
        return view('frontend.pages.cookies', compact('cookies'));
    }

    public function UserLogout(){
        Auth::logout();
        return Redirect('/');
    }
    
    
    public function sendEmail(Request $request) {
        
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
        
        // Save Contact Detials
        $contact = new WebContact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        
        
        $toEmail    =   $request->email;
        $data       =   array(
            "name"    =>   $request->name,
            "email"    =>   $request->email,
            "subject"    =>   'Welcome to hamadan international.',
            "message"    =>   $request->message
        );

        // pass dynamic message to mail class
        Mail::to($toEmail)->send(new CustomEmail($data));
      

        if(Mail::failures() != 0) {
            // return back()->with("success", "E-mail sent successfully!");
            // return Response::json(['success' => 'Email sent successfully!']);
            return Response::json('OK');
        }
        
        else {
            return back()->with("failed", "E-mail not sent!");
        }
    }

}
