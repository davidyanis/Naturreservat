<?php
    include "./animals.php";

    $apa = $_POST["apa"];
    $giraffe = $_POST["giraffe"];
    $tiger = $_POST["tiger"];
    $kokos= $_POST["kokosnuts"];

    if ($_POST["submit"]) {
        echo "<h1> Hur många $namn har " . $apa . "</h1>";
        echo "<h1>$amount</h1>";
    }
    
?>