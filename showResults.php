<?php
    include "./class.php";

    $apa = $_POST["apa"];
    $tiger = $_POST["tiger"];
    $giraffe = $_POST["giraffe"];
    $coconut = $_POST["coconut"];


    for ($i = 0; $i < $apa; $i++) {
        $animal1 = new Apor("Apa");
        echo $animal1->getImage() . "<br>" . $animal1->makeSound();
    }
    for ($i = 0; $i < $tiger; $i++) {
        $animal1 = new Tiger("Tiger");
        echo $animal1->getImage() . "<br>" . $animal1->makeSound();
    }
    for ($i = 0; $i < $giraffe; $i++) {
        $animal1 = new Giraffe("Giraffe");
        echo $animal1->getImage() . "<br>" . $animal1->makeSound();
    }
    for ($i = 0; $i < $coconut; $i++) {
        $animal1 = new Coconut("Coconut");
        echo $animal1->getImage() . "<br>" . $animal1->makeSound();
    }

   
       
    
?>