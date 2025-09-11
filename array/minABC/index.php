<?php 
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];

    if($a > $b) {
        if($a > $c) echo $a;
        else echo $c;
    } else {
        if($b > $c) echo $b;
        else echo $c;
    }