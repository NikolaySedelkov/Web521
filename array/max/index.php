<?php 
    require("../lib/findMaxOnArray.php");
    
    $items = $_GET['item'];

    echo "Максимальный элемент = ".findMaxOnArray($items);