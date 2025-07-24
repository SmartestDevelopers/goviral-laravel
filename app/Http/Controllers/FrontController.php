<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }
    public function seo()
    {
        return view('seo');
    }

    public function smm()
    {
        return view('smm');
    }
    public function ppc()
    {
        return view('ppc');
    }
    public function orm()
    {
        return view('orm');
    }
    public function seoaudit()
    {
        return view('seoaudit');
    }
    public function uiux()
    {
        return view('uiux');
    }
    public function graphicdesign()
    {
        return view('graphicdesign');
    }
    public function webdesign()
    {
        return view('webdesign');
    }
     public function webdevelopment()
    {
        return view('webdevelopment');
    }
     public function wordpress()
    {
        return view('wordpress');
    }
     public function contact()
    {
        return view('contact');
    }
     public function ourTeam()
    {
        return view('team');
    }

    public function pricing()
    {
        return view('pricing');
    }

    public function blog()
    {
        return view('blog');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function faq()
    {
        return view('faq');
    }
    public function privacypolicy()
    {
        return view('privacypolicy');
    }
    public function disclaimer()
    {
        return view('disclaimer');
    }
     public function terms()
    {
        return view('terms');
    }

    public function formSubmit(Request $request){

        // print_r($request);
        $data = $request->all();
        //print_r($data); 
        
        $name = $data['name'];
        $email = $data['email'];
        $message = $data['message'];
        

    }

 
}
