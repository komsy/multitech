<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\ContactUsFormMail;
use App\Mail\TeamContactUsFormMail;

class ContactUs extends Component
{
    public string $contactName = '';
    public string $contactEmail = '';
    public string $contactMessage = '';
    public  $service_id;
    public string $contactNumber = '';

    public function render()
    {
        $services=\App\Models\Service::select('serviceName','id')->where('serviceStatus',1)->get();
        $companyDetails = \App\Models\CompanyProfile::first();
        $homepage = \App\Models\Homepage::first();
        $contactUs= \App\Models\ContactUs::select('header','subHeading','text','map')->first();
        
        return view('livewire.contact-us',compact('services','companyDetails','contactUs'));
    } 
    
    protected $rules = [
        'contactName' => 'required|min:6',
        'contactEmail' => 'required|email',
        'contactMessage' => 'required',
        'service_id' => 'required|integer',
        'contactNumber' => 'required'
    ];

    public function submit()
    {
        $validated = $this->validate();
        $email=$this->contactEmail;
        
        $salesNumber = \App\Models\CompanyProfile::select('salesNumber')->first();
        $service = \App\Models\Service::select('serviceName')->findOrFail($this->service_id);
        // dd($service);
        try{
        \App\Models\ContactUsForm::create($validated);
            // Send ACK email to client 
            Mail::to($email)->send(new ContactUsFormMail($this->contactName,$this->contactEmail, $service,$this->contactMessage, $salesNumber));
            //Send email to team    
            Mail::to('koometest@gmail.com')->send(new TeamContactUsFormMail($this->contactName,$this->contactEmail, $service,$this->contactMessage, $salesNumber));

        }catch(\Exception $e){
            Log::info($e);
            session()->flash('error', 'Oops ! Something went wrong');
            return;
        }

        session()->flash('success', 'Your message is in our inbox, A human will get back to you.');

        $this->reset();
    }
}
