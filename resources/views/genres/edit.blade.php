@extends('layout')

@section('content')
<h2>Edit Genre</h2>

<form action="{{ route('genres.update', $genre->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label">Nama Genre</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $genre->name) }}" required>
        @error('name')
            <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
    <button class="btn btn-success">Update</button>
    <a href="{{ route('genres.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection
