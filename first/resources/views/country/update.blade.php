@extends('templates.main')

@section('title', "Обновить страну")
@section('header', "Обновить страну ".$country['country'])

@section('content')
    <form id="form" action="{{ route('api.country.update', ['id' => $country['country_id']]) }}">
        <label>
            Название
            <input name="name" value="{{ $country['country'] }}"/>
        </label>
        <br/>
        <button>Сохранить</button>
        {{ csrf_field() }}
    </form>

    <script>
        document.getElementById('form').addEventListener('submit', e => {
            e.preventDefault();
            fetch(e.target.action, {
                headers: {
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                method: 'PUT',
                body: new FormData(e.target),
            }).then(
                res => {
                    if(200 <= res.status < 400) {
                        return res
                    }
                }
            ).then(
                () => window.location = "{{route("country.list")}}"
            )
        });
    </script>
@endsection
