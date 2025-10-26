@extends('templates.main')

@section('title', 'Список стран')
@section('header', 'Список стран')

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