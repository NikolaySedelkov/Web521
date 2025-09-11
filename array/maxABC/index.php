<?php
    // Запрос из php
    require("../lib/findMaxOnArray.php");

    // Всегда есть возможность достать параметры запросов
    // Для этого есть специальные глобальные объекты $_GET, $_POST, $_REQUEST - 
    // - Все это объекты, и параметры нужно доставать по ключу $_GET['field_NAME']

    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];

    $array = [$a, $b, $c];

    echo "Максимально значение = ".findMaxOnArray($array);
?>