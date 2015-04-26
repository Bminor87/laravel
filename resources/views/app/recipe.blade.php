@extends('app')
@section('content')
        <h1>{{ $recipe->name }}</h1>
        <p>{{ $recipe->short_desc }}</p>
        <p>{!! $recipe->description !!}</p>
@endsection