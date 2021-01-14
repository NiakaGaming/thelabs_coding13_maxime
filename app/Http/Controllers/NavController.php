<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Nav;
use Illuminate\Http\Request;

class NavController extends Controller
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
        $navs = Nav::all();
        $logo = Logo::first();
        return view("pages.admin.partials.nav.index", compact("navs", "logo"));
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
     * @param  \App\Models\Nav  $nav
     * @return \Illuminate\Http\Response
     */
    public function show(Nav $nav)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nav  $nav
     * @return \Illuminate\Http\Response
     */
    public function edit(Nav $nav)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nav  $nav
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "link" => "required",
        ]);

        $nav = Nav::find($id);
        $nav->link = $request->link;
        $nav->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nav  $nav
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nav $nav)
    {
        //
    }
}
