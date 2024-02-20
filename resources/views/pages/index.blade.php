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
                <a href="{{ route('users.edit', $comic -> id) }}" class='mx-2'>EDIT</a>
                <form action="{{route('users.destroy', $comic -> id)}}" method="POST" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Canc">
                </form>
            </li>
        @endforeach
    </ul>
@endsection
