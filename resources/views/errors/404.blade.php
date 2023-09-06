@extends('errors.error')
@section('title', '404')
@section('content')
    <div id="error">
        <div class="container text-center">
            <div class="pt-8">
                <h1 class="errors-titles">404</h1>
                <p>Data not found</p>
                <a href={{ route('admin.dashboard') }} class="text-blue btn btn-primary">Back to page</a>
            </div>
        </div>
    </div>
@endsection
