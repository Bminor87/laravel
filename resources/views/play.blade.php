@extends('app')
@section('content')
    @if (count($data))
    <h1>
        @foreach ($data as $name)
            {{ $name }}
        @endforeach
    </h1>
    @endif
@endsection
