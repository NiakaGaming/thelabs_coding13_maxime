<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarouselController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
        $this->middleware('web');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carousels = Carousel::all();
        return view("pages.admin.home.carousel.index", compact("carousels"));
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
            "name" => "required|",
            "img" => "required|file",
        ]);

        $carousel = new Carousel;
        $carousel->name = $request->name;
        $carousel->img = $request->file("img")->hashName();
        $request->file("img")->storePublicly("img/carousel", "public");

        $carousel->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function show(Carousel $carousel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function edit(Carousel $carousel)
    {
        // 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "name" => "required|",
            "img" => "required|file",
        ]);

        // Name
        $carousel = Carousel::find($id);
        $carousel->name = $request->name;

        // Image
        if ($carousel->img != "01.jpg" && $carousel->img != "02.jpg") {
            Storage::disk("public")->delete("img/carousel/" . $carousel->img);
        }
        $carousel->img = $request->file("img")->hashName();
        $request->file("img")->storePublicly("img/carousel", "public");

        $carousel->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carousel = Carousel::find($id);
        Storage::disk("public")->delete("img/carousel/" . $carousel->img);
        $carousel->delete();

        return redirect()->back();
    }
}
