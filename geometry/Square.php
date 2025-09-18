<?php
    require('./AbstractShape.php');

    class Square extends AbstractShape {
        protected int $side;

        public function __construct($side) {
            parent::__construct(4);

            $this->side = $side;
        }

        public function getPerimetr(): float {
            return 4 * $this->side;
        }

        public function getSqua(): float {
            return pow($this->side, 2);
        }
    }