<?php
    require('./AbstractShape.php');

    class Circle extends AbstractShape {
        protected int $r;

        public function __construct($r) {
            parent::__construct(0);

            $this->r = $r;
        }
        
        public function getPerimetr(): float {
            return 2 * pi() * $this->r;
        }

        public function getSqua(): float {
            return pi() * pow($this->r, 2);
        }
    }