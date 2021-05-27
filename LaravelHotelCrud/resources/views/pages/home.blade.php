@extends('layouts.main-layout')

@section('content')

    <h1>Employees:</h1>
    <ul>
        @foreach ($employees as $employee)

            <li>

                <a href="{{ route('show', $employee -> id)}}">

                    {{$employee -> firstname}}  {{$employee -> lastname}}

                    <a href="{{ route('edit', $employee -> id) }}">

                        &#9998;

                    </a>

                    <a href="{{ route('destroy', $employee -> id)}}">

                        &#10060;

                    </a>



                </a>

            </li>

        @endforeach
    </ul>

@endsection
