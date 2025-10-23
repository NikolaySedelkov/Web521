@extends('templates.main')

@section('title', $country['country'])
@section('header', $country['country'])

@section('content')
    <table>
        <caption>{{ $country['country'] }}</caption>

        <tbody>
            <tr>
                <td>Название</td>
                <td>{{ $country['country'] }}</td>
            </tr>

            <tr>
                <th colspan="2">Список городов</th>
            </tr>

            @foreach ($country['cities'] as $city)
                <tr>
                    <td colspan="2">{{$city['city']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
