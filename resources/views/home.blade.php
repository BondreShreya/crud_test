@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                   <div class="card-body">
                        <ul class="list-unstyled">
                            <li>
                                <a href="{{ route('pages.create')}}" type="btn btn-primary">Crud</a>
                            </li>
                        </ul>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
