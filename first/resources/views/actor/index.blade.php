<h1> {{ $user['name'] }} {{ $user['surname'] }} </h1>

<table>
    <caption>Биография</caption>

    <tbody>
        <tr>
            <td>Имя</td>
            <td>{{ $user['name'] }}</td>
        </tr>
        <tr>
            <td>Фамилия</td>
            <td>{{ $user['surname'] }}</td>
        </tr>
        @isset($user['patronymic'])
            <tr>
                <td>Отчество</td>
                <td>{{ $user['patronymic'] }}</td>
            </tr>
        @endisset

        <tr>
            <td>Город</td>
            <td>{{ $user['address']['city'] }}</td>
        </tr>

        <tr>
            <td  colspan="2">
                Соц.сети
            </td>
        @foreach ($user['social'] as $name => $link)
            <tr>
                <td>{{$name}}</td>
                <td>{{$link}}</td>
            </tr>
        @endforeach
    </tbody>
</table>