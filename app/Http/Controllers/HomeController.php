<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Carousel;
use App\Models\Choice;
use App\Models\Logo;
use App\Models\Nav;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Title;
use App\Models\Video;
use App\Models\ContactForm;
use App\Models\Tag;
use App\Models\Categorie;
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
        $services = Service::orderBy("id", "desc")->paginate(9);
        $services_quick = Service::all()->random(3);
        $titles = Title::all();
        $abouts = About::all();
        $teams = Team::all();
        $choice = Choice::first();
        $random_team_1 = Team::all()->except($choice->team_id)->random(1);
        $random_team_2 = Team::all()->except([$choice->team_id, $random_team_1[0]->id])->random(1);
        $testimonials = Testimonial::all()->sortByDesc("id")->take(6);
        $video = Video::first();
        $contact_form = ContactForm::first();
        return view('pages.user.home.index', compact("navs", "logo", "carousels", "services", "services_quick", "titles", "abouts", "teams", "choice", "random_team_1", "random_team_2", "testimonials", "video", "contact_form"));
    }
    public function indexServices()
    {
        $navs = Nav::all();
        $logo = Logo::first();
        $services = Service::where("id", ">", 0)->paginate(9);
        $contact_form = ContactForm::first();
        return view('pages.user.services.index', compact("navs", "logo", "services", "contact_form"));
    }
    public function indexBlog()
    {
        $navs = Nav::all();
        $logo = Logo::first();
        $categories = Categorie::all();
        $tags = Tag::all();
        return view('pages.user.blog.index', compact("navs", "logo", "categories", "tags"));
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
