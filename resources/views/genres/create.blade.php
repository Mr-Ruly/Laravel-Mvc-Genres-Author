@extends('layout')

@section('content')
<h2>Tambah Genre</h2>

<form action="{{ route('genres.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nama Genre</label>
        <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
        @error('name')
            <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
    <button class="btn btn-primary">Simpan</button>
    <a href="{{ route('genres.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection
