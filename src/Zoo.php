<?php 
    namespace Zoo;

    class Zoo extends Animal{
        private array $animalsList;

        public function __construct() {
            echo 'Zoo is created!', PHP_EOL;
        }

        public function addAnimal(int $aviaryNumber, Animal $animal) {
            $this->animalsList[$aviaryNumber] = $animal;
        }

        public function clearAviary(int $aviaryNumber) {
            unset($this->animalsList[$aviaryNumber]);
        }

        public function printZoo() {
            foreach($this->animalsList as $aviary => $animalObj) {
                $animal = str_replace('Zoo\\', '', get_class($animalObj));
                echo $aviary, " - ", $animal, PHP_EOL;
            }
        }
    }
?>