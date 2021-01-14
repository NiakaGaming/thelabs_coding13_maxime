<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Choice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
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
        $teams = Team::all();
        $choice = Choice::first();
        return view("pages.admin.home.team.index", compact("teams", "choice"));
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
            'first_name' => "required",
            'last_name' => "required",
            'function' => "required",
            'img' => "required|file",
        ]);

        $team = new Team;
        $team->first_name = $request->first_name;
        $team->last_name = $request->last_name;
        $team->function = $request->function;
        $team->img = $request->file("img")->hashName();
        $request->file("img")->storePublicly("img/team", "public");
        $team->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => "required",
            'last_name' => "required",
            'function' => "required",
            'img' => "required|file",
        ]);

        $team = Team::find($id);
        $team->first_name = $request->first_name;
        $team->last_name = $request->last_name;
        $team->function = $request->function;

        // Image
        if ($team->img != "1.jpg" && $team->img != "2.jpg" && $team->img != "3.jpg") {
            Storage::disk("public")->delete("img/team/" . $team->img);
        }
        $team->img = $request->file("img")->hashName();
        $request->file("img")->storePublicly("img/team", "public");
        $team->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::find($id);
        if ($team->img != "1.jpg" && $team->img != "2.jpg" && $team->img != "3.jpg") {
            Storage::disk("public")->delete("img/team/" . $team->img);
        }
        $team->delete();

        return redirect()->back();
    }
}
