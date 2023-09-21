@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Page') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('pages.update', $page) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="slug" class="form-label">{{ __('Slug') }}</label>
                            <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug', $page->slug) }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="slug" class="form-label">{{ __('Title') }}</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $page->title) }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="slug" class="form-label">{{ __('Language') }}</label>
                            <input type="text" class="form-control" id="lang" name="lang" value="{{ old('lang', $page->lang) }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">{{ __('Content') }}</label>
                            <textarea class="form-control" id="content" name="content" rows="4" required>{{ old('content', $page->content) }}</textarea>
                        </div>


                        <!-- Include fields for Title, Language, and Content here -->

                        <button type="submit" class="btn btn-primary">{{ __('Update Page') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
