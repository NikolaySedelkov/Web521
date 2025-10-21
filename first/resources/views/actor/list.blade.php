@extends('templates.main')

@section('title', 'Список актеров')
@section('header', 'Список актеров')

@section('content')
    <ul>
        @foreach ($actors as $actor)
            <li>
                <a href="{{ route("actor.index", ["id" => $actor['actor_id']]) }}">
                    {{ $actor['first_name'] }} {{ $actor['last_name'] }}
                </a>
            </li>
        @endforeach

    </ul>
@endsection