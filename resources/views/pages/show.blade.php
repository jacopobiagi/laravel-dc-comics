@extends('layouts.main-layout')
@section('head')
    <title>show</title>
@endsection
@section('content')
    <ul>
       
        <li>{{$comic -> title}}</li>

    </ul>
@endsection
