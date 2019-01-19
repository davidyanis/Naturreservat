<?php
        abstract class Animals {
            abstract function getImage();
            abstract function makeSound();
        }

        class Apor extends Animals{
            private $animalName;

            public function __construct($animalName) {
                $this->animalName = $animalName;             
            }

            public function getImage() {
                print '<img src="apa.jpg">';
            }

            public function makeSound() {
                print 'UUUUUAUUUUAAA';
            }
        }
        class Giraffe extends Animals{
            private $animalName;

            public function __construct($animalName) {
                $this->animalName = $animalName;             
            }

            public function getImage() {
                print '<img src="giraffe.jpg">';
            }

            public function makeSound() {
                print 'booo';
            }
        }
        class Tiger extends Animals{
            private $animalName;

            public function __construct($animalName) {
                $this->animalName = $animalName;             
            }

            public function getImage() {
                print '<img src="tiger.jpeg">';
            }

            public function makeSound() {
                print 'ROAR';
            }
        }
        class Coconut extends Animals{
            private $animalName;

            public function __construct($animalName) {
                $this->animalName = $animalName;             
            }

            public function getImage() {
                print '<img src="coconut.jpeg">';
            }

            public function makeSound() {
                print 'mmmmmmm';
            }
        }

    
?>