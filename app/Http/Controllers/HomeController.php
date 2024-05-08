<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WhyChooseUs;
use App\Models\Testmonials;
use App\Models\Project;
use App\Models\Service;
use App\Models\About;
use App\Models\Fact;
use App\Models\CompanyProfile;
use App\Models\Homepage;

class HomeController extends Controller
{
    public function welcome()
    {

        $testimonials=Testmonials::select('name','designation','testmonialImage','testimonial')->where('testmonialStatus',1)->get();
        $projects=Project::select('projectName','heading','description','projectImage')->where('projectStatus',1)->get();
        $services=Service::select('serviceName','serviceHeading','serviceImage','serviceDescription')->where('serviceStatus',1)->get();
        $whyChooseUs=WhyChooseUs::select('icon','heading','text')->get();
        $aboutUs=About::where('aboutStatus',1)->first();
        $facts=Fact::select('icon','heading','number')->where('factStatus',1)->get();
        $companyDetails=CompanyProfile::first();
        $homepage=Homepage::first();
       // dd($testimonials);
        return view('frontend.welcome',compact('companyDetails','homepage','testimonials','whyChooseUs','projects','services','aboutUs','facts'));
    }
    public function about()
    {

        $companyDetails=CompanyProfile::first();
        $homepage=Homepage::first();
        $whyChooseUs=WhyChooseUs::select('icon','heading','text')->get();
        $aboutUs=About::where('aboutStatus',1)->first();
       // dd($testimonials);
        return view('frontend.about',compact('companyDetails','homepage','whyChooseUs','aboutUs'));
    }
}
