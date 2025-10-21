<h1>Список городов</h1>

<ul>
    @foreach ($cities as $city)
        <li>
            <a href="{{ route("city.index", ["id" => $city['city_id']]) }}">
                {{$city['city']}}
            </a>
        </li>  
    @endforeach
</ul>