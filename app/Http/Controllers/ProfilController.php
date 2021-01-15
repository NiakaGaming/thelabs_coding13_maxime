<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin_web');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $all_users = User::all();
        return view("pages.admin.profil.index", compact("user", "all_users"));
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
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function show(Profil $profil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profil  $profil
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
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "last_name" => "required",
            "first_name" => "required",
            "description" => "required",
            "img" => "required|file",
            "email" => "required",
            "function" => "required",
        ]);

        $profil = Profil::find($id);
        $profil->user->last_name = $request->last_name;
        $profil->user->first_name = $request->first_name;
        $profil->description = $request->description;

        if ($profil->img != "01.jpg" && $profil->img != "02.jpg" && $profil->img != "03.jpg") {
            Storage::disk("public")->delete("img/avatar/" . $profil->img);
        }
        $profil->img = $request->file("img")->hashName();
        $request->file("img")->storePublicly("img/avatar", "public");

        $profil->user->email = $request->email;
        $profil->function = $request->function;

        $profil->save();
        $profil->user->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profil $profil)
    {
        //
    }
}
