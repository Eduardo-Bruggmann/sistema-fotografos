<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class PhotoController extends Controller
{
    public function index(): View
    {
        $photos = Photo::with('user')
            ->withCount('likes')
            ->withExists([
                'likes as liked_by_current_user' => fn ($query) => $query->where('user_id', Auth::id()),
            ])
            ->latest()
            ->paginate(9);

        return view('dashboard', compact('photos'));
    }

    public function create(): View|RedirectResponse
    {
        if (!Auth::user()->isPhotographer()) 
            return redirect()->route('dashboard');

        return view('photos.create');
    }

    public function store(Request $request): RedirectResponse
    {
        if (!Auth::user()->isPhotographer())
            return redirect()->route('dashboard');

        $validated = $request->validate([
            'title' => ['nullable', 'string', 'max:255'],
            'image' => ['required', 'image', 'max:5120'],
        ]);

        $path = $request->file('image')->store('photos', 'public');

        $request->user()->photos()->create([
            'title' => $validated['title'],
            'path' => '/storage/' . $path,
        ]);

        return redirect()->route('dashboard')->with('status', 'Foto enviada com sucesso.');
    }

    public function like(Request $request, Photo $photo): RedirectResponse
    {
        $like = $photo->likes()
            ->where('user_id', $request->user()->id)
            ->first();

        if ($like) 
            $like->delete();
        else 
            $photo->likes()->create([
                'user_id' => $request->user()->id,
            ]);

        return back();
    }
}
