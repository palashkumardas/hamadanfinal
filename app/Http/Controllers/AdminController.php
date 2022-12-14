<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Contact;
use App\Models\PrivacyPolicy;
use App\Models\TermsConditions;
use App\Models\CookiesPolicy;
use App\Models\WebContact;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use DB;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $contacts = DB::table('web_contacts')
                    ->selectRaw('*')
                    ->paginate(10);
        return view('backend.dashboard',compact('contacts'));
    }


    public function about()
    {
        $title = 'About';
        $data = About::get()->first();
        return view('backend.pages.about_us',compact('title','data'));
    }

    public function aboutUpdate(Request $request)
    {
        $id = $request->id;
        About::find($id)->update([
            'description' => $request->description,
            'updated_at' => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function contact()
    {
        $title = 'Contact';
        $data = Contact::get()->first();
        return view('backend.pages.contact_us',compact('title','data'));
    }

    public function contactUpdate(Request $request)
    {
        $id = $request->id;
        Contact::find($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'address' => $request->address,
            'office_hours' => $request->office_hours,
            'phone_one' => $request->phone_one,
            'phone_two' => $request->phone_two,
            'phone_three' => $request->phone_three,
            'email_one' => $request->email_one,
            'email_two' => $request->email_two,
            'email_three' => $request->email_three,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'youtube' => $request->youtube,
            'instagram' => $request->instagram,
            'map_location' => $request->map_location,
            'updated_at' => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function policy(){
        $title = 'policy';
        $data = PrivacyPolicy::get()->first();
        return view('backend.pages.privacy_policy',compact('title','data'));
    }
    
    public function policyUpdate(Request $request)
    {

        $id = $request->id;
        PrivacyPolicy::find($id)->update([
            'description' => $request->description,
            'updated_at' => Carbon::now(),
        ]);
        return redirect()->back();
    }
    
    public function terms(){
        $title = 'terms';
        $data = TermsConditions::get()->first();
        return view('backend.pages.terms_and_condition',compact('title','data'));
    } 

    public function termsUpdate(Request $request)
    {

        $id = $request->id;
        TermsConditions::find($id)->update([
            'description' => $request->description,
            'updated_at' => Carbon::now(),
        ]);
        return redirect()->back();
    }
    
    public function coockies(){
        $title = 'Cookies';
        $data = CookiesPolicy::get()->first();
        return view('backend.pages.cookies_policy',compact('title','data'));
    }
    
    public function cookiesUpdate(Request $request)
    {

        $id = $request->id;
        CookiesPolicy::find($id)->update([
            'description' => $request->description,
            'updated_at' => Carbon::now(),
        ]);
        return redirect()->back();
    }
    

}
