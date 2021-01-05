<?php

namespace App\Http\Controllers;

use App\Models\Nav;
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
        $navs = Nav::all();
        return view('pages.user.home.index', compact("navs"));
    }
    public function indexServices()
    {
        $navs = Nav::all();
        return view('pages.user.services.index', compact("navs"));
    }
    public function indexBlog()
    {
        $navs = Nav::all();
        return view('pages.user.blog.index', compact("navs"));
    }
    public function indexContact()
    {
        $navs = Nav::all();
        return view('pages.user.contact.index', compact("navs"));
    }
    public function indexAdmin()
    {
        return view('pages.admin.index');
    }
}
