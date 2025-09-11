<?php 
    $even = $_GET['even'];
    $odd = $_GET['odd'];

    $result = [];

    // Четные
    for($i = 0; $i < $even; ++$i) {
        $n = rand();
        $result[] = ($n + $n % 2);  
    }

    // НЕЧетные
    for($i = 0; $i < $even; ++$i) {
        $n = rand();
        $result[] = ($n + ($n + 1) % 2);  
    }