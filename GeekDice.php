<?php
require 'Dice.php';
class GeekDice extends Dice{
    
    protected $average;
    
    public function __construct(
        
        ){
            parent::__construct();
    }


    public function rollDice(){
        $rollResult = rand(1, $this->numSides);
        $this->lastRolled[] = $rollResult;
    }
    
    public function roll($rollTimes=1){
        // echo $numSides;
        for ($i = 0; $i < $rollTimes; $i++) {
             $this->rollDice();
        }
        return $this->getAllRolls();
        // return $this->average();
        
    }
    

    
    
    
    
    
}