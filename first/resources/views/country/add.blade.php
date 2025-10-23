@extends('templates.main')

@section('title', "Добавить страну")
@section('header', "Добавить страну")

@section('content')
    <form method="post" action="{{route('api.country.add')}}">
        <label>
            Название
            <input name="name"/>
        </label>
        <br/>
        <button>Сохранить</button>
    </form>
@endsection