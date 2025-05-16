@extends('layout')

@section('content')
<h2 class="mb-3">Genre List</h2>
<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($genres as $genre)
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $genre['name'] }}</h5>
                    <p class="card-text">Genre ID: {{ $genre['id'] }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
