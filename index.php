<?php

// require "Dice.php";
// require "CasinoDice.php";
require "GeekDice.php";


// $roll1 = new Dice(6);

// echo "<br>";

// $roll2 = new Dice(6);
// var_dump($roll2->roll(2));


// $roll3 = new CasinoDice();
// var_dump($roll3->roll(100,3));
// echo "<br> Average: ".$roll3->getAverage();
// // echo $rollTimes;

$roll4 = new GeekDice();
$roll4->roll(100);