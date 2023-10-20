<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artists = Artist::all();

        return view('artists.index', compact('artists'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artists.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'artist_name' => 'required',
            'description' => 'required',
            'art_type' => 'required',
            'media_link' => 'required',
            'cover_image' => 'required',
        ]);

        Artist::create($request->all());
        return redirect()->route('artists.index')->with('success','Artist added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Artist $artist)
    {
        return view('artists.show', compact('artist'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artist $artist)
    {
        return view('artists.edit', compact('artist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artist $artist)
    {
        $validateData = $request->validate([
            'artist_name' => 'required|string',
            'description' => 'required|string',
            'art_type' => 'required|in:Hoi hoa, Am nhac, Van hoc',
            'media_link' => 'required|url',
            'cover_image' => 'required|url',
        ]);

        $artist->update($validateData);
        return redirect()->route('artists.index')->with('success','Artist added successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artist $artist)
    {
        $artist->delete();

        return redirect()->route('artists.index')->with('success','Artists delete successfully');
    }
}
