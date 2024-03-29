<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use App\Models\Tag;
use App\Models\Newsletter;
use App\Mail\NewsletterArticleMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('redact_admin_web');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        $categories = Categorie::all();
        $tags = Tag::all();

        $this->authorize("create-article");

        return view("pages.admin.blog.article.index", compact("articles", "categories", "tags"));
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
            "title" => "required",
            "text" => "required",
            "img" => "required",
            "categorie" => "required",
            "tag" => "required",
        ]);

        $article = new Article;
        $article->title = $request->title;
        $article->text = $request->text;

        $article->img = $request->file("img")->hashName();
        $request->file("img")->storePublicly("img/article", "public");

        $article->user_id = Auth::id();

        if (Auth::user()->role_id == 2) {
            $article->approved = 0;
        } else {
            $article->approved = 1;
            $newsletters = Newsletter::all();
            foreach ($newsletters as $key => $value) {
                Mail::to($value->email)->send(new NewsletterArticleMail($request));
                if (env('MAIL_HOST', false) == 'smtp.mailtrap.io') {
                    sleep(1);
                }
            }
        }

        $article->save();

        $article->categorie()->syncWithoutDetaching($request->categorie);
        $article->tag()->syncWithoutDetaching($request->tag);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "title" => "required",
            "text" => "required",
            "img" => "required",
            "categorie" => "required",
            "tag" => "required",
        ]);

        $article = Article::find($id);
        $article->title = $request->title;
        $article->text = $request->text;

        if ($article->img != "blog-1.jpg" && $article->img != "blog-2.jpg" && $article->img != "blog-3.jpg") {
            Storage::disk("public")->delete("img/article/" . $request->img);
        }
        $request->file("img")->storePublicly("img/article", "public");
        $article->img = $request->file("img")->hashName();

        $article->user_id = Auth::id();

        if (Auth::user()->role_id == 2) {
            $article->approved = 0;
        } else {
            $article->approved = 1;
            $newsletters = Newsletter::all();
            foreach ($newsletters as $key => $value) {
                Mail::to($value->email)->send(new NewsletterArticleMail($request));
                if (env('MAIL_HOST', false) == 'smtp.mailtrap.io') {
                    sleep(1);
                }
            }
        }

        $article->save();

        $article->categorie()->sync($request->categorie);
        $article->tag()->sync($request->tag);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        if ($article->img != "blog-1.jpg" && $article->img != "blog-2.jpg" && $article->img != "blog-3.jpg") {
            Storage::disk("public")->delete("img/article/" . $request->img);
        }
        $article->delete();

        return redirect()->back();
    }

    public function approved($id)
    {
        $article = Article::find($id);
        $article->approved = 1;
        $newsletters = Newsletter::all();
        foreach ($newsletters as $key => $value) {
            Mail::to($value->email)->send(new NewsletterArticleMail($article));
            if (env('MAIL_HOST', false) == 'smtp.mailtrap.io') {
                sleep(1);
            }
        }
        $article->save();

        return redirect()->back();
    }
}
