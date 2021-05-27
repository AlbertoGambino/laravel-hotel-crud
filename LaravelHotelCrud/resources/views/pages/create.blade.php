@extends('layouts.main-layout')

@section('content')

    <h1>Inserisci i tuoi dati:</h1>

    <form method="POST" action="{{route('store')}}">

        @csrf

        @method('POST')

        <label for="firstname">FirstName</label>
        <input id="firstname" type="text" name="firstname">

        <label for="lastname">Lastname</label>
        <input id="lastname" type="text" name="lastname">

        <label for="role">Role</label>
        <input id="role" type="text" name="role">

        <label for="ral">Ral</label>
        <input id="ral" type="text" name="ral">

        <input type="submit" value="CREATE">
    </form>


@endsection
