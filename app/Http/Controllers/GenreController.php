<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        return view('genres.index', compact('genres'));
    }

    public function create()
    {
        return view('genres.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        Genre::create([
            'name' => $request->name,
        ]);

        return redirect()->route('genres.index')->with('success', 'Genre berhasil ditambahkan');
    }

    public function edit(Genre $genre)
    {
        return view('genres.edit', compact('genre'));
    }

    public function update(Request $request, Genre $genre)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $genre->update([
            'name' => $request->name,
        ]);

        return redirect()->route('genres.index')->with('success', 'Genre berhasil diupdate');
    }

    public function destroy(Genre $genre)
    {
        $genre->delete();

        return redirect()->route('genres.index')->with('success', 'Genre berhasil dihapus');
    }
   
}
