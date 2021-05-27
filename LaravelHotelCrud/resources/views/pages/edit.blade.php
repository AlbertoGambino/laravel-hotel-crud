@extends('layouts.main-layout')

@section('content')

    <h1>Modifica i dati:</h1>

    <form method="POST" action="{{route('update', $employee -> id)}}">

        @csrf

        @method('POST')

        <label for="firstname">FirstName</label>
        <input id="firstname" type="text" name="firstname" value="{{ $employee -> firstname}}">

        <label for="lastname">Lastname</label>
        <input id="lastname" type="text" name="lastname" value="{{ $employee -> lastname}}">

        <label for="role">Role</label>
        <input id="role" type="text" name="role" value="{{ $employee -> role}}">

        <label for="ral">Ral</label>
        <input id="ral" type="text" name="ral" value="{{ $employee -> ral}}">

        <input type="submit" value="EDIT">
    </form>


@endsection
