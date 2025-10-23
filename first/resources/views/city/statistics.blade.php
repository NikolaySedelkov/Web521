<table>
    <tbody>
        <tr>
            <td>
                Общее количество городов
            </td>
            <td>
                {{ $count }}
            </td>
        </tr>
        <tr>
            <td colspan="2">Кол-во по странам</td>
        </tr>
        <tr>
            <th>ID страны</th>
            <th>Кол-во</th>
        </tr>
        @foreach ($statistics_groups as $group)
            <tr>
                <td>{{ $group['country'] }}</td>
                <td>{{ $group['count_city'] }}</td>
            </tr>
        @endforeach
        <tr>
            <td>
                Минимальное название города
            </td>
            <td>
                {{ $min_length_name }} символов
            </td>
        </tr>
        <tr>
            <td>
                Максимальное название города
            </td>
            <td>
                {{ $max_length_name }} символов
            </td>
        </tr>
    </tbody>
</table>