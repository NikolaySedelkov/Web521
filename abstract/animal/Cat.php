<?php
    require("./Animal.php");

    class Cat extends Animal {
        public int $countLife;

        public function getOwner() {
            return $this->owner;
        }

        function __construct($field) {
            // Вызов конструктора родительского класса
            //  при вызове конструктора дочернего класса
            // для инициализации приватных полей родительского класса
            parent::__construct($field);
        }
    }

    $cat = new Cat();

    $cat->name = 'barsik';
    //$cat->owner = '!!';

    //$cat->print();

    echo $cat->getField();

    /// echo $cat->getOwner()."!!!";