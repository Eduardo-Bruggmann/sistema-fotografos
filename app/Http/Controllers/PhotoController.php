<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index(Request $request)
    {
        $search = trim($request->validate(['search' => 'nullable|string|max:255'])['search'] ?? '');
        $photos = Photo::query()
            ->with('user:id,name')
            ->withCount('likes')
            ->withExists(['likes as liked_by_user' => fn ($query) => $query->where('user_id', $request->user()->id)])
            ->when($search !== '', fn ($query) => $query->where(fn ($query) => $query
                ->whereLike('title', "%{$search}%")
                ->orWhereHas('user', fn ($query) => $query->whereLike('name', "%{$search}%"))))
            ->orderBy('id')
            ->paginate(9)
            ->withQueryString();

        return view('dashboard', compact('photos', 'search'));
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

    public function like(Request $request, Photo $photo)
    {
        $photo->toggleLike($request->user()->id);

        return back();
    }
}
