@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>NEW COMIC</h1>
    <form action="{{route('users.store')}}" method="POST">
        @csrf
        @method('POST')

        <label for="title">title</label>
        <input type="text" name="title" id="title">
        <br>
        <label for="description">description</label>
        <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
        <br>
        <label for="type">type</label>
        <input type="text" name="type" id="type">
        <br>
        <label for="price">price</label>
        <input type="number" name="price" id="price">
        <br>
        <label for="code">code</label>
        <input type="text" name="code" id="code">
        <br>
        <input type="submit" value="CREATE">
    </form>
@endsection
