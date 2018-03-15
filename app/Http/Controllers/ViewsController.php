<?php

namespace App\Http\Controllers;

use Validator;
use App\Contact;
use App\Mail;
use Illuminate\Http\Request;

class ViewsController extends Controller
{
    //
    public  function index()
    {
        return view('Pages.index');
    }

    public  function service()
    {
        return view('Pages.service');
    }

    public function contact( )
    {
        return view('Contacts.contact');
    }

    public function getcontact(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone_number = $request->phone_number;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        
        return redirect()->route('index')->with('success','Message Sent Successfully');
        
    }

    public  function email(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        $email = new Email();
        $email->name = $request->name;
        $email->email = $request->email;
        $email->save();

        dd($request->all());
    }

    public function doctors()
    {
        return view('Doctors.doctor');
    }

    public function department()
    {
        return view('Departments.department');
    }

    public  function about()
    {
        return view('Abouts.about');
    }

    public function faqs()
    {
        return view('Faqs.faq');

    }

    public function galary()
    {
        return view('Galarys.galary');
    }

    public function pricelist()
    {
        return view('Pricelists.pricelist');
    }

    
}
