@extends('layout')

@section('content')
<div class="text-center">
    <h1 class="display-4 mb-3 fw-bold">Welcome to <i class="fas fa-book-open"></i> Book MVC</h1>
    <p class="lead mb-5">A simple Laravel MVC project to display <strong>Genres</strong> and <strong>Authors</strong>.</p>
    <div class="d-flex justify-content-center gap-3">
        <a href="/genres" class="btn btn-primary btn-lg shadow"><i class="fas fa-music"></i> View Genres</a>
        <a href="/authors" class="btn btn-secondary btn-lg shadow"><i class="fas fa-user-edit"></i> View Authors</a>
    </div>
</div>
@endsection
