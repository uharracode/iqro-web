<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Homesetting as Home;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $articles = Home::with('media')->where('posisi', 'berita')->orderBy('id','desc')->get();
    $poster = Home::with('media')->where('posisi', 'poster')->orderBy('id','desc')->limit(10)->get();
    $banner = Home::with('media')->where('posisi', 'slider')->orderBy('id','desc')->limit(10)->get();
    $video = Home::with('media')->where('posisi', 'video')->orderBy('id','desc')->limit(10)->get();
    $logos = Home::with('media')->where('posisi', 'logo')->orderBy('id','desc')->limit(10)->get();
    $profile = Home::with('media')->where('posisi', 'profil')->orderBy('id','desc')->limit(10)->get();
    $testimoni = Home::with('media')->where('posisi', 'testimoni')->orderBy('id','desc')->get();
            return view('home.index',compact('articles', 'poster', 'banner','video','logos','video','profile','testimoni'));
            
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
