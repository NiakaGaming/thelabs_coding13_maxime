<?php

namespace App\Http\Controllers;

use App\Mail\ContactMailing;
use App\Models\ContactMail;
use App\Mail\ConfirmContactMail;
use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin_web');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact_form = ContactForm::first();
        return view("pages.admin.partials.contact-form.index", compact("contact_form"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required",
            "subject" => "required",
            "message" => "required",
        ]);


        $mail = new ContactMail;
        $mail->title = $request->subject;
        $mail->subtitle = $request->name;
        $mail->text = $request->message;
        $mail->save();

        Mail::to("generique@labs.com")->send(new ContactMailing($request));
        Mail::to($request->email)->send(new ConfirmContactMail($request));

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function show(ContactForm $contactForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactForm $contactForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => "required",
            'text' => "required",
            'info_title' => "required",
            'adress' => "required",
            'phone' => "required",
            'email' => "required",
            "btn" => "required",
        ]);

        $contact_form = ContactForm::find($id);
        $contact_form->title = $request->title;
        $contact_form->text = $request->text;
        $contact_form->info_title = $request->info_title;
        $contact_form->adress = $request->adress;
        $contact_form->phone = $request->phone;
        $contact_form->email = $request->email;
        $contact_form->btn = $request->btn;
        $contact_form->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactForm $contactForm)
    {
        //
    }
}
