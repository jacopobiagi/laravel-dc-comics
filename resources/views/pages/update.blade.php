@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>EDIT COMIC</h1>
    @if ($errors -> any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors -> all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('users.update', $comic -> id)}}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">title</label>
        <input type="text" name="title" id="title" value="{{$comic -> title}}">
        <br>
        <label for="description">description</label>
        <textarea name="desc" id="desc" cols="30" rows="10" value="{{$comic -> description}}"></textarea>
        <br>
        <label for="type">type</label>
        <input type="text" name="type" id="type" value="{{$comic -> type}}">
        <br>
        <label for="price">price</label>
        <input type="number" name="price" id="price" value="{{$comic -> price}}">
        <br>
        <label for="code">code</label>
        <input type="text" name="code" id="code" value="{{$comic -> ID_Comic}}">
        <br>
        <input type="submit" value="UPDATE">
    </form>
@endsection
