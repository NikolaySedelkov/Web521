@extends('templates.main')

@section('title', $country['country'])
@section('header')
    {{ $country['country'] }}
    <button @if(count($country['cities']) > 0) disabled @endif onclick="handleDelete()">
        Удалить
    </button>
    <a href="{{ route('country.update', ['id' => $country['country_id']]) }}">
        <button>
            Обновить
        </button>
    </a>

    <script>
        function handleDelete() {
            const fd = new FormData();
            fd.set('_token', "{{ csrf_token() }}");
            fetch("{{ route('api.country.delete', ['id' => $country['country_id']]) }}", {
                headers: {
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                method: 'DELETE',
                body: fd
            }).then(
                res => {
                    if(200 <= res.status < 400) {
                        return res;
                    }
                }
            ).then(
                () => window.location = "{{ route('country.list') }}"
            )
        }
    </script>
@endsection

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
