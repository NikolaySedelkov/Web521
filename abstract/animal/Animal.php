<?php
    class Animal {
        public string $name;
        public int $age;
        public float $weight;
        
        // protected - доступны внутри класса или внутри классов наследников
        protected string $owner;

        public function print() {
            echo "$this->name - $this->owner";
        }

        function __construct($field) {
            $this->field = $field;
        }

        private $field;
        public function getField() {
            return $this->field;
        }
    }

    class MyArray {
        private array $data;

        function __construct($size) {
            $this->data = array();

            for($i = 0; $i < $size; ++$i) {
                $this->data[] = rand(0, 1000);
            }
        }
    }