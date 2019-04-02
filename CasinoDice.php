<?php
require 'Dice.php';
class CasinoDice extends Dice{
    
    protected $average;
    
    public function __construct(
        $modifier=3
        ){
            parent::__construct();
    }
    
    public function getAverage(){
        $allRolls = $this->lastRolled;
        $ammountOfRolls = count($allRolls);
        echo "<br>Ammount of rolls: ".$ammountOfRolls;
        foreach ($allRolls as $roll) {
            $result = $result + $roll;
        }
        $this->average = $result/$ammountOfRolls;
        return $this->average;
    }

    public function rollDice($mod){
         $rollResult = rand(1, $this->numSides) + $mod;
        if ($rollResult>6) {
            $rollResult=6;
        }
        if ($rollResult<1) {
            $rollResult=1;
        }
        $this->lastRolled[] = $rollResult;
    }
    
    public function roll($rollTimes=1, $mod){
        // echo $numSides;
        for ($i = 0; $i < $rollTimes; $i++) {
             $this->rollDice($mod);
        }
        echo "Modifier: ".$mod."<br>";
        return $this->getAllRolls();
        // return $this->average();
        
    }
    

    
    
    
    
    
}