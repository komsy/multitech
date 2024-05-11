<?php

namespace App\Livewire;

use Livewire\Component;

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

        //dd($this->service_id);
        \App\Models\ContactUsForm::create($validated);
        // try{
        //     Mail::to('koometest@gmail.com')->send(new ContactMail($this->contactName, $this->contactEmail, $this->contactMessage));
        // }catch(\Exception $e){
        //     session()->flash('error', 'Oops ! Something went wrong');
        //     return;
        // }

        session()->flash('success', 'Your message is in our inbox, A human will get back to you.');

        $this->reset();
    }
}
