<?php

namespace App\Http\Controllers;

use App\Models\ContactMail;
use Illuminate\Http\Request;

class ContactMailController extends Controller
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
        $mails = ContactMail::all();
        return view("pages.admin.contact.mail.index", compact("mails"));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactMail  $contactMail
     * @return \Illuminate\Http\Response
     */
    public function show(ContactMail $contactMail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactMail  $contactMail
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactMail $contactMail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactMail  $contactMail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactMail $contactMail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactMail  $contactMail
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactMail $contactMail)
    {
        //
    }
}
