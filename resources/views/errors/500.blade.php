@extends('errors.error')
@section('title', '500')
@section('content')
    <div id="error">
        <div class="container text-center">
            <div class="pt-8">
                <h1 class="errors-titles">500</h1>
                <p>Whoopps, something went wrong</p>
                <a href={{route('homepage')}} class="text-blue btn btn-primary">Back to page</a>
            </div>
        </div>
    </div>
@endsection
