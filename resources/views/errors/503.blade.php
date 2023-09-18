@extends('errors.error')
@section('title', '503')
@section('content')
    <div id="error">
        <div class="container text-center">
            <div class="pt-8">
                <h1 class="errors-titles">503</h1>
                <p>Be right back</p>
                <a href={{route('homepage')}} class="text-blue btn btn-primary">Back to page</a>
            </div>
        </div>
    </div>
@endsection
