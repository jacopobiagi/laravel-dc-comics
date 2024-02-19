@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1><a href="{{route('users.create')}}">CREATE</a></h1>
    <ul>
        @foreach ($comics as $comic)
            <li>
                <a href="{{ route('users.show', $comic -> id) }}">{{$comic -> title}}</a>
            </li>
        @endforeach
    </ul>
@endsection
