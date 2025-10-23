@extends("templates.main")

@section('title', 'Главная')
@section('header', 'Главная')

@section('content')
    <ul>
        <li><a href="{{ route("actor.list") }}">Актеры</a></li>
        <li><a href="{{ route("city.list") }}">Города</a></li>
        <li><a href="{{ route("country.list") }}">Страны</a></li>
    </ul>
@endsection
