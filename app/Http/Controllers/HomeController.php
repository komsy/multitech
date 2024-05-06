<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WhyChooseUs;
use App\Models\Testmonials;

class HomeController extends Controller
{
    public function welcome()
    {

        $testimonials=Testmonials::where('testmonialStatus',1)->get();
        $whyChooseUs=WhyChooseUs::select('icon','heading','text')->get();
       // dd($testimonials);
        return view('frontend.welcome',compact('testimonials','whyChooseUs'));
    }
}
