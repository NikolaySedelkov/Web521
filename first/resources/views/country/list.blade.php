@extends('templates.main')

@section('title', 'Список городов')
@section('header', 'Список городов')

@section('content')
    <a href="{{route('country.add')}}"> Добавить </a>
    <ul>
        @foreach ($countries as $country)
            <li>
                <a href="{{ route("country.index", ["id" => $country['country_id']]) }}">
                    {{ $country['country'] }}
                </a>
            </li>
        @endforeach

    </ul>
@endsection