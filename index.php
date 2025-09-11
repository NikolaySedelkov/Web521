<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>
            <a href='/variable'>Переменные</a>
        </li>
        <li>
            <a href='/loops'>Циклы</a>
        </li>
        <li>
            <a href='/array'>Массивы</a>
        </li>
        <li>
            <a href='/array/object'>Ассоциативные массивы</a>
        </li>
    </ul>

    <?php
        echo rand(0, 1000);
    ?>

    <h1>
        <?php
            $left_bounc = rand(0, 1000);
            echo $left_bounc;
            echo '-';
            echo rand($left_bounc, 2 * $left_bounc);
        ?>
    </h1>
    <a href="/contacts">контакты</a>
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero alias voluptates provident quaerat at quisquam eligendi exercitationem animi officiis cumque, totam vero repellat, qui porro iure distinctio tenetur soluta! Assumenda!
</body>
</html>