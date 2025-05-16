@extends('layout')

@section('content')
<h2>Edit Author</h2>

<form action="{{ route('authors.update', $author->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label">Nama Author</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $author->name) }}" required>
        @error('name')
            <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email Author</label>
        <input type="email" name="email" class="form-control" value="{{ old('email', $author->email) }}" required>
        @error('email')
            <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
    <button class="btn btn-success">Update</button>
    <a href="{{ route('authors.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection
