<h1>Список городов</h1>

<a href="{{route('city.statistics')}}"> Статистика </a>

<div>
    <form id="form">
        <label>
            Поиск
            <input name="searchValue" onchange="onSearch()"/>
        </label>
        <lable>
            Сортировка
            <input name="orderBy" type="checkbox" onchange="onSearch()"/>
        </lable>
    </form>
</div>

<ul id="list">
    @foreach ($cities as $city)
        <li>
            <a href="{{ route("city.index", ["id" => $city['city_id']]) }}">
                {{$city['city']}}
            </a>
        </li>  
    @endforeach
</ul>

<script>
    const form = document.getElementById("form");
    function onSearch() {
        const formData = new FormData(form);
        fetch(`{{ route('api.city.list') }}?searchValue=${formData.get('searchValue')}&orderBy=${formData.get('orderBy') ? 'ASC' : 'DESC'}`).then(
            res => res.json()
        ).then(
            data => {
                const list = document.getElementById("list");
                list.innerHTML = "";
                data.forEach(city => {
                    list.innerHTML += `
                        <li>${city.city}</li>
                    `
                });
            }
        )
    }
</script>