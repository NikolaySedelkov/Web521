<?php
    class Point {
        public int $x;
        public int $y;
    } 

    class Line {
        public Point $p1;
        public Point $p2;

        public int $weight;
        public string $color;
    } 

    class Canvas {
        public array $lines;
    }