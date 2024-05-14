<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\ContactUsFormMail;

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
        $contactName=$this->contactName;
        $message=[
            'email'=>$email,
            'name'=>$contactName,
            'branch'=>$contactName,
            ];
        $service = \App\Models\Service::select('serviceName')->findOrFail($this->service_id);
        //dd($service->serviceName);
        try{
        \App\Models\ContactUsForm::create($validated);
            // Mail::send('emails.customer',$message,function($message)use($email,$contactName){
            //     $message->to($email)->subject('Service Inquiry Submitted');
            //   });
            // Send ACK email to client 
            Mail::to($email)->send(new ContactUsFormMail($this->contactName, $this->contactEmail, $service));
            //Send email to team    
            Mail::to($email)->send(new TeamContactUsFormMail($this->contactName, $this->contactEmail, $validated));

        }catch(\Exception $e){
            Log::info($e);
            session()->flash('error', 'Oops ! Something went wrong');
            return;
        }

        session()->flash('success', 'Your message is in our inbox, A human will get back to you.');

        $this->reset();
    }
}
