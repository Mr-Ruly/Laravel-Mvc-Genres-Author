@extends('layout')

@section('content')
<h2>Daftar Genre</h2>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<a href="{{ route('genres.create') }}" class="btn btn-primary mb-3">Tambah Genre</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Genre</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($genres as $genre)
        <tr>
            <td>{{ $genre->id }}</td>
            <td>{{ $genre->name }}</td>
            <td>
                <a href="{{ route('genres.edit', $genre->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('genres.destroy', $genre->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus genre ini?');">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
