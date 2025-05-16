<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    public function create()
    {
        return view('authors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:authors,email',
        ]);

        Author::create($request->only('name', 'email'));

        return redirect()->route('authors.index')->with('success', 'Author berhasil ditambahkan');
    }

    public function edit(Author $author)
    {
        return view('authors.edit', compact('author'));
    }

    public function update(Request $request, Author $author)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => "required|email|unique:authors,email,{$author->id}",
        ]);

        $author->update($request->only('name', 'email'));

        return redirect()->route('authors.index')->with('success', 'Author berhasil diupdate');
    }

    public function destroy(Author $author)
    {
        $author->delete();

        return redirect()->route('authors.index')->with('success', 'Author berhasil dihapus');
    }

}
