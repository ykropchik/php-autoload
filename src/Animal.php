<?php

    namespace Zoo;

    class Animal {
        private int $age;

        public function __construct(int $age) {
            $this->age = $age;
        }

        public function happyBirthday() {
            $this->age++;
        }
    }
    
?>