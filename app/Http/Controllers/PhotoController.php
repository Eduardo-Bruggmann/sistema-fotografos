<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::all();
        return view('dashboard', compact('photos'));
    }

    public function create()
    {
        return view('photos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'image' => 'required|image|max:2048',
            'description' => 'nullable|string',
        ]);

        Photo::create([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $request->file('image')->store('photos', 'public'),
            'user_id' => $request->user()->id,
        ]);

        return redirect()->route('dashboard')->with('success', 'Foto cadastrada com sucesso!');
    }
}