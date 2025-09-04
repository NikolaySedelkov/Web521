<?php
    // Переменные - именованая область память, резервирование ячейки памяти компьютера под нужды программы,
    //           с дальнейшим образенем к ней по имени

    // Синтаксис создания переменных в php
    // $NAME_VARIABLE; - объявление
    // $NAME_VARIABLE = VALUE; объявление и сразу инициализация


    // Синтаксис обращения так же с $
    // pow($value, 6) - Возведение значения из переменной $value в 6 степень

    $a = 100;
    $b = rand(9, 999);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Переменные</title>
</head>
<body>
    <table>
        <tr>
            <td>a</td>
            <td>
                <?php
                    echo $a; 
                ?>
            </td>
        </tr>

        <tr>
            <td>b</td>
            <td>
                <?php
                    echo $b; 
                ?>
            </td>
        </tr>
    </table>

    <ul>
        <li>
            <?php
                echo $a;
                echo '+';
                echo $b;
                echo '=';
                echo $a + $b; 
            ?>
        </li>
        
        <li>
            <?php
                echo $a; echo '-'; echo $b; echo '='; echo $a - $b; 
            ?>
        </li>

        <li>
            <?php
                echo $a.'*'.$b."=".($a * $b);
            ?>
        </li>

        <li>
            <?php
                echo "$a/$b=".($a/$b); 
            ?>
        </li>
    </ul>

    <?php
        $str = "Hello";
        $Hello = -666.333; 
    ?>

    <h1>
        <?php
            echo $str; echo $$str; 
            echo '!'.substr($str, 1, 3).'!';
        ?>
    </h1>
</body>
</html>