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
    
    protected $companyDetails;
    protected $homepage;
    protected $services;
    protected $servicess;
    protected $whyChooseUs;
    protected $aboutUs;
    protected $facts;
    protected $testimonials;

    public function __construct()
    {
        $this->companyDetails = CompanyProfile::first();
        $this->homepage = Homepage::first();
        $this->services = Service::select('serviceName', 'serviceHeading', 'serviceImage', 'serviceDescription')
            ->where('serviceStatus', 1)->get();
        $this->servicess=Service::select('serviceName',)->where('serviceStatus',1)->get();
        $this->whyChooseUs = WhyChooseUs::select('icon', 'heading', 'text')->get();
        $this->aboutUs = About::where('aboutStatus', 1)->first();
        $this->facts = Fact::select('icon', 'heading', 'number')->where('factPageShow', 1)->get();
        $this->testimonials = Testmonials::select('name', 'designation', 'testmonialImage', 'testimonial')
            ->where('testmonialStatus', 1)->get();
    }

    public function welcome()
    {
        $companyDetails = $this->companyDetails;
        $homepage = $this->homepage;
        $facts = $this->facts;
        $testimonials = $this->testimonials;
        $whyChooseUs = $this->whyChooseUs;
        $services = $this->services;
        $aboutUs = $this->aboutUs;   
        $projects=Project::select('projectName','heading','description','projectImage')->where('projectStatus',1)->get();
        $facts=Fact::select('icon','heading','number')->where('factStatus',1)->get();
    //    dd($facts);
        return view('frontend.welcome',compact('companyDetails','homepage','testimonials','whyChooseUs','projects','services','aboutUs','facts'));
    }
    public function about()
    {
        $companyDetails = $this->companyDetails;
        $facts = $this->facts;
        $homepage = $this->homepage;
        $whyChooseUs = $this->whyChooseUs;
        $aboutUs = $this->aboutUs;       
        return view('frontend.about',compact('companyDetails','facts','homepage','whyChooseUs','aboutUs'));
    }
    public function service()
    {
        $companyDetails = $this->companyDetails;
        $facts = $this->facts;
        $services = $this->services;
        $homepage = $this->homepage;
        $testimonials = $this->testimonials;
        return view('frontend.service',compact('companyDetails','homepage','services','facts','testimonials'));
    }

    public function contact()
    {
        $companyDetails = $this->companyDetails;
        $homepage = $this->homepage;
        // $services = $this->servicess;       
        return view('frontend.contact',compact('companyDetails','homepage',));
    }
}




