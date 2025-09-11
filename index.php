<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ООП</h1>
    <b>ООП</b> - <b>О</b>бъектно <b>О</b>риентированное <b>П</b>рограммирование, 
    программирование ориентированное на объектах

    Объект - Набор свойств

    <hr/>

    <h2>СТруктуризация</h2>

    Первое что нужно(приходится) делать в рамках ООП, выделять объекты, которые присутвуют в алгоритмах

    // Пример: программы, графического илюстратора, простенький, рисуем только прямыми линиями
    Рещение: Выделяем 2 структуры
    <ol>
        <li>
            Точка - состоящая из
            <ul>
                <li>x - Горизонтальной координаты</li> 
                <li>y - Вертикальной координаты</li> 
            </ul>
        </li>

        <li>
            Линия - состоящая из
            <ul>
                <li>p1 - Точка начала</li> 
                <li>p2 - Точка конца</li> 
                <li>w - ширина</li> 
                <li>color - цвет</li> 
            </ul>
        </li>

        <li>
            Картинка - состоящая из
            <ul>
                <li>lines - Набор(массив) линий</li> 
            </ul>
        </li>
    </ol>

    // Для того, что бы создать структуру использовальется следующий синтаксис
    <pre>
        <code>
class NAME_STRUCT {
    public TYPE $NAME_FIELD1;
    public TYPE $NAME_FIELD2;
    public TYPE $NAME_FIELD3;
    ...
}
        </code>
    </pre>

    <ul>
        <li>
            NAME_STRUCT - название структуры
        </li>

        <li>
            NAME_FIELD_I - название поля структуры(составная часть)
        </li>

        <li>
            TYPE - Тип поля структуры(int, string, ...)
        </li>
    </ul>

    <?php
        class Point {
            public int $x;
            public int $y;
        } 

        // Примеры использования

        // СОздание переменной, которая будет является структурой, описанной классом Point
        $example_point = new Point();

        // Работа с полями структуры: STRUCT->NAME_FIELD
        $example_point->x = 100;
        $example_point->y = 9;
    ?>

    <?php
        class Line {
            public Point $p1;
            public Point $p2;

            public int $weight;
            public string $color;
        } 

        $example_line = new Line();

        $example_line->weight = 2;
        $example_line->color = 'red';

        $example_line->p1 = new Point();
        $example_line->p1->x = 44;
        $example_line->p1->y = -44;

        $example_line->p2 = $example_point;
    ?>

    <?php
        class Canvas {
            public array $lines;
        } 
    ?>
</body>
</html>