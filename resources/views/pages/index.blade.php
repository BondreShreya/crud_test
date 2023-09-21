@extends('layouts.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Page List') }}</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Slug</th>
                                    <th>Title</th>
                                    <th>Language</th>
                                    <th>Content</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pages as $page)
                                <tr>
                                    <td>{{ $page->id }}</td>
                                    <td>{{ $page->slug }}</td>
                                    <td>{{ $page->title }}</td>
                                    <td>{{ $page->lang }}</td>
                                    <td>{{ $page->content }}</td>
                                    <td>
                                        <!-- View Icon with a Link -->
                                        <a href="{{ route('pages.show', $page->id) }}" class="btn btn-primary">
                                            <i class="fas fa-eye"></i>
                                        </a>

                                        <!-- edit  Link  -->
                                        <a href="{{ route('pages.edit', $page) }}" class="btn btn-primary">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>

                                        <!-- Delete Icon with a Form (for example) -->
                                        <form action="{{ route('pages.destroy', $page->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fas fa-trash-alt"></i> 
                                            </button>
                                        </form>
                                    </td>  
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
