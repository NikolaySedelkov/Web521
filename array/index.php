<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Задачи
    </h1>

    <ul>
        <li>
            <form action="/array/maxABC">
                Максимально из трех чисел
                <hr/>
                <input type="number" name="a" required/>
                <input type="number" name="b" required/>
                <input type="number" name="c" required/>

                <button>Определить максимум</button>
            </form>
        </li>

        <li>
            <form action="/array/max">
                Максимально из чисел
                <hr/>
                <ul id="list-number">
                    <li>
                        <input type="number" name="item[]" required/>
                        <button
                            type="button"
                            onclick="this.parentElement.remove()"
                        >
                            🗑️
                        </button>
                    </li>
                </ul>
                <button
                    type="button"
                    onclick="
                        document.getElementById('list-number').innerHTML += `
                            <li>
                                <input type='number' name='item[]' required/>
                                <button
                                    type='button'
                                    onclick='this.parentElement.remove()'
                                >
                                    🗑️
                                </button>
                            </li>
                        `
                    "
                >
                    +
                </button>
                <button>Определить максимум</button>
            </form>
        </li>

        <li>
            <form action="/array/randomGenerate">
                Генерация случайного массива
                <hr/>

                <table>
                    <tr>
                        <td>Длина</td>
                        <td>
                            <input name="length" min="1" required type="number"/>
                        </td>
                    </tr>

                    <tr>
                        <td>Min</td>
                        <td>
                            <input name="min" required type="number"/>
                        </td>
                    </tr>

                    <tr>
                        <td>Max</td>
                        <td>
                            <input name="max" required type="number"/>
                        </td>
                    </tr>
                </table>

                <button>
                    Сгенерировать
                </button>
            </form>
        </li>
    </ul>
</body>
</html>