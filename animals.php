<?php
        abstract class Animals {
                public $animalName;
                public $image = "<img src='apa.png'>";
                public $sound;
                abstract function makeSound();
        }

        class Apor extends Animals{
        
            public function __construct($animalName, $image) {
                $this->animalName = $animalName;
                $image = "<img src='apa.png'>";
                $this->image = $image;
                $this->sound = $sound;
                
            }

            public function __toString() {
                return $this->animalName;
            }

            public function makeSound() {
                return $this->sound = "UAUAUA";
            }

            public function getName() {
                return $this->animalName;
            }
        }

        class Tiger extends Animals{
            function __construct() {
                $this->animalName = $animalName;
                echo "<img src='tiger.jpeg'>";
            }

            public function __toString() {
                return $this->animalName;
            }

            public function makeSound() {
                return $this->sound = "roar mfakka";
            }

            public function getName() {
                return $this->animalName;
            }
        }

        class Giraffe extends Animals {
            function __construct() {
                $this->animalName = $animalName;
            }

            public function __toString() {
                return $this->animalName;
            }

            public function makeSound() {
                return $this->sound = "roar mfakka";
            }

            public function getName() {
                return $this->animalName;
            }
        }
        class Kokosnotter extends Animals {
            function __construct() {
                $this->animalName = $animalName;
            }

            public function __toString() {
                return $this->animalName;
            }

            public function makeSound() {
                return $this->sound = "roar mfakka";
            }

            public function getName() {
                return $this->animalName;
            }
        }

        $apa = new Apor("Im a");

    
?>