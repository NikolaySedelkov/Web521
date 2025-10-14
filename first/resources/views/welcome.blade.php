<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    </head>
    <body class="antialiased">
        <p>Ларавель по умолчанию, позволяет создавать сайты в формате SSR</p>
        <p>Для разработки в формате SRR подлкючен специальный шаблонизатор HTML - <b>blade</b></p>

        <pre>
            Подстановка значения из PHP в HTML идёт через синтаксис @{{ value }}
            <br/>
            <ul>
                <li> Адрес сайта: {{ env("APP_URL") }}</li>
                <li> Текущее время: {{ time() }}</li>
                <li> UUID пользователя: {{ rand() }}</li>
            </ul>
        </pre>

        <pre>
            Работа с условиями
            @@if(conditinal) 
                ДЕЙСТВИЕ
            @@elseif (other_conditinal_1)
                ДЕЙСТВИЕ
            @@elseif (other_conditinal_2)
                ДЕЙСТВИЕ
            @@elseif (other_conditinal_3)
                ДЕЙСТВИЕ
            @@else
                ДЕЙСТВИЕ
            @@endif

            @php
                $dt = new DateTime("now", new DateTimeZone("Europe/Moscow"));
                $h = (int)$dt->format("H");
            @endphp

            <b>Текущее время суток: </b>
            @if($h < 4)
                Ночь
            @elseif($h < 12)
                Утро
            @elseif($h < 17)
                День
            @else
                Вечер
            @endif

            
            Выполнить действие если условие не выполняется @@unless
            @unless(env("DB_PORT") > 8000)
                ПОРТ К БАЗЕ ДАННЫХ НЕ БОЛЬШЕ 8000
            @endunless

            Проверка на то, что значение существует @@isset

            @php
                $dbPassowd = env('DB_PASSWORD')
            @endphp
            @isset($dbPassowd) DB_PASSWORD = {{ $dbPassowd }} @endisset

                Проверка на то, что не пустой массив @@empty
        </pre>

        <pre>
            Циклы
            @@for(initialization;coonditional;post-actionn)
                ДЕЙСТВИЕ
            @@endfor

            <table border="black">
                <caption>График уборки</caption>
                <thead>
                    <tr>
                        <th>Время</th>
                        <th>Подпись</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i <= $h; ++$i)
                        <tr>
                            <td>
                                @unless($i > 9) {{ 0 }}@endisset{{ $i }}:00
                            </td>
                            <td></td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </pre>

        <pre>
            <ul>
                @foreach ($values as $value)
                    <li>{{$value}}</li>
                @endforeach
            </ul>
        </pre>
    </body>
</html>
