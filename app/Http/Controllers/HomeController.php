<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Carousel;
use App\Models\Logo;
use App\Models\Nav;
use App\Models\Service;
use App\Models\Title;
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
        $logo = Logo::first();
        $carousels = Carousel::all();
        $services = Service::where("id", ">", 0)->paginate(9);
        $services_quick = Service::all()->random(3);
        $titles = Title::all();
        $abouts = About::all();
        return view('pages.user.home.index', compact("navs", "logo", "carousels", "services", "services_quick", "titles", "abouts"));
    }
    public function indexServices()
    {
        $navs = Nav::all();
        $logo = Logo::first();
        $services = Service::where("id", ">", 0)->paginate(9);
        return view('pages.user.services.index', compact("navs", "logo", "services"));
    }
    public function indexBlog()
    {
        $navs = Nav::all();
        $logo = Logo::first();
        return view('pages.user.blog.index', compact("navs", "logo"));
    }
    public function indexContact()
    {
        $navs = Nav::all();
        $logo = Logo::first();
        return view('pages.user.contact.index', compact("navs", "logo"));
    }
    public function indexAdmin()
    {
        return view('pages.admin.index');
    }
}
