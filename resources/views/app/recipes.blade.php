@extends('app')
@section('content')
    @foreach($recipes as $recipe)
        <h1><a href="{{ action('RecipesController@show',[$recipe->id]) }}">{{ $recipe->name }}</a></h1>
        <p>{{ $recipe->short_desc }}</p>
    @endforeach
@endsection