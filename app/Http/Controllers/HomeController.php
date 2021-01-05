<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function indexHome()
    {
        return view('pages.user.home.index');
    }
    public function indexServices()
    {
        return view('pages.user.services.index');
    }
    public function indexBlog()
    {
        return view('pages.user.blog.index');
    }
    public function indexContact()
    {
        return view('pages.user.contact.index');
    }
    public function indexAdmin()
    {
        return view('pages.admin.index');
    }
}
