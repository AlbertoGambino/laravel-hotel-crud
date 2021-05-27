@extends('layouts.main-layout')

@section('content')

    <h1>Employee:</h1>

    <h2>{{$employee -> firstname}}  {{$employee -> lastname}}</h2>

    <h4>{{$employee -> role}}</h4>

    <h4>{{$employee -> ral}}</h4>

@endsection
