<?php
    require("./Animal.php");

    class Cat extends Animal {
        public int $countLife;
    }

    $cat = new Cat();

    $cat->name = 'barsik';