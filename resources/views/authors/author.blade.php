@extends('layout')

@section('content')
<h2 class="mb-3">Author List</h2>
<div class="list-group">
    @foreach ($authors as $author)
        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
            {{ $author['name'] }}
            <span class="badge bg-primary rounded-pill">ID: {{ $author['id'] }}</span>
        </a>
    @endforeach
</div>
@endsection
