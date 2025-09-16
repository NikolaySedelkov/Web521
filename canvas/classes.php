<?php
    class Math {
        private float $PI = 3.14;

        // ацессоры - функции, предоставляющие доступы к приватным данным
        function getPI(): float {
            return $this->PI;
        }
    }

    class Point {
        // Для обхявления поля в классе - ACCESS_LEVEL TYPE_FIELD $NAME_FIELD;
        // ACCESS_LEVEL - модификатор доступа к переменной - указать на то, доступа ли переменная
        // ACCESS_LEVEL - { public - доступный везде, private - доступный только внутри класса}
        private int $x;
        public int $y;

        public function getX(): int {
            return $this->x;
        }

        public function getY(): int {
            return $this->y;
        }

        public function setX(int $x) {
            if(0 <= $x) {
                $this->x = $x;
            }
        }

        public function move(int $dx, int $dy) {
            $this->x += $dx;
            $this->y += $dy;
        }

        // Конструктор - функция, которая создает экземпляр класса, принимая параметры
        function __construct(int $x, int $y) {
            $this->x = $x;
            $this->y = $y;
        }
    } 

    class Line {
        public Point $p1;
        public Point $p2;

        public int $weight;
        public string $color;

        function __construct(Point $p1, Point $p2, int $weight = 2, string $color = 'black') {
            $this->p1 = $p1;
            $this->p2 = $p2;
            $this->weight = $weight;
            $this->color = $color;
        }
    } 

    class Canvas {
        public array $lines;

        function __construct(array $lines = []) {
            $this->lines = $lines;
        }
    }