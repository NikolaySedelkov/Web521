<?php

    // Абстрактный класс - класс, имеющющий хотя бы одну абстрактную функцию
    //  Класс, экземпляры коготого нельзя создать
    abstract class AbstractShape {
        protected int $countAngle;

        public function getCountAngle() {
            return $this->countAngle;
        }

        public function __construct($countAngle) {
            $this->countAngle = $countAngle;
        }

        // Абстрактная функция - это функция не имеющая реализации
        public abstract function getPerimetr(): float;
        public abstract function getSqua(): float;
    }

    // Ошибка - попытка создать экземпляр абстрактного класса
    // $d = new AbstractShape(2);