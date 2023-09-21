@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Page Details</h1>
    <div class="card">
        <div class="card-body">
            <h2>{{ $page->title }}</h2>
            <p><strong>Slug:</strong> {{ $page->slug }}</p>
            <p><strong>Language:</strong> {{ $page->lang }}</p>
            <div>{{ $page->content }}</div>
        </div>
    </div>
    <a href="{{ route('pages.index') }}" class="btn btn-primary mt-3">Back to List</a>
</div>
@endsection
