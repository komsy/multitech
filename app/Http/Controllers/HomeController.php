<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WhyChooseUs;
use App\Models\Testmonials;
use App\Models\Project;

class HomeController extends Controller
{
    public function welcome()
    {

        $testimonials=Testmonials::select('name','designation','testmonialImage','testimonial')->where('testmonialStatus',1)->get();
        $projects=Project::select('projectName','heading','description','projectImage')->where('projectStatus',1)->get();
        $whyChooseUs=WhyChooseUs::select('icon','heading','text')->get();
       // dd($testimonials);
        return view('frontend.welcome',compact('testimonials','whyChooseUs','projects'));
    }
}