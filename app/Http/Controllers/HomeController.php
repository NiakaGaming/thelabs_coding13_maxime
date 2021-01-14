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
use App\Models\Article;
use App\Models\Comment;
use App\Models\Map;
use Dotenv\Util\Str;
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
        $services = Service::orderByDesc("id")->paginate(9);
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
        $services = Service::orderByDesc("id")->paginate(9);
        $services_prime_1 = Service::orderByDesc("id")->take(3)->get();
        $services_prime_2 = Service::orderByDesc("id")->skip(3)->take(3)->get();
        $titles = Title::all();
        $contact_form = ContactForm::first();
        $blog_quick = Article::orderByDesc("id")->take(3)->get();
        $blog_quick_smummary = [];
        foreach ($blog_quick as $key => $value) {
            $blog_quick_smummary[$key] = Str::substr($value->text, 0, 150) . "...";
        }
        return view('pages.user.services.index', compact("navs", "logo", "services", "contact_form", "services_prime_1", "services_prime_2", "titles", "blog_quick", "blog_quick_smummary"));
    }
    public function indexBlog()
    {
        $navs = Nav::all();
        $logo = Logo::first();
        $categories = Categorie::all();
        $tags = Tag::all();
        $articles = Article::orderBy("id", "asc")->paginate(3);
        $comments = Comment::all();
        return view('pages.user.blog.index', compact("navs", "logo", "categories", "tags", "articles", "comments"));
    }
    public function indexContact()
    {
        $navs = Nav::all();
        $logo = Logo::first();
        $map = Map::first();
        $contact_form = ContactForm::first();
        return view('pages.user.contact.index', compact("navs", "logo", "map", "contact_form"));
    }
    public function indexAdmin()
    {
        return view('pages.admin.index');
    }
}
