<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WhyChooseUs;
use App\Models\Testmonials;
use App\Models\Project;
use App\Models\Service;
use App\Models\About;

class HomeController extends Controller
{
    public function welcome()
    {

        $testimonials=Testmonials::select('name','designation','testmonialImage','testimonial')->where('testmonialStatus',1)->get();
        $projects=Project::select('projectName','heading','description','projectImage')->where('projectStatus',1)->get();
        $services=Service::select('serviceName','serviceHeading','serviceImage','serviceDescription')->where('serviceStatus',1)->get();
        $whyChooseUs=WhyChooseUs::select('icon','heading','text')->get();
        $aboutUs=About::where('aboutStatus',1)->first();
       // dd($testimonials);
        return view('frontend.welcome',compact('testimonials','whyChooseUs','projects','services','aboutUs'));
    }
    public function about()
    {

       $whyChooseUs=WhyChooseUs::select('icon','heading','text')->get();
       $aboutUs=About::where('aboutStatus',1)->first();
       // dd($testimonials);
        return view('frontend.about',compact('whyChooseUs','aboutUs'));
    }
}