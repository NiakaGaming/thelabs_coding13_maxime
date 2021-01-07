<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Logo;
use App\Models\Nav;
use App\Models\Service;
use App\Models\Title;
use Illuminate\Support\Str;
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
        $logos = Logo::all();
        $carousels = Carousel::all();
        $services = Service::where("id", ">", 0)->paginate(9);
        $services_quick = Service::all()->random(3);
        $titles = Title::all();
        return view('pages.user.home.index', compact("navs", "logos", "carousels", "services", "services_quick", "titles"));
    }
    public function indexServices()
    {
        $navs = Nav::all();
        $logos = Logo::all();
        $services = Service::where("id", ">", 0)->paginate(9);
        return view('pages.user.services.index', compact("navs", "logos", "services"));
    }
    public function indexBlog()
    {
        $navs = Nav::all();
        $logos = Logo::all();
        return view('pages.user.blog.index', compact("navs", "logos"));
    }
    public function indexContact()
    {
        $navs = Nav::all();
        $logos = Logo::all();
        return view('pages.user.contact.index', compact("navs", "logos"));
    }
    public function indexAdmin()
    {
        return view('pages.admin.index');
    }
}
