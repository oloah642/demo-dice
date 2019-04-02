<?php

class Dice{
    protected $numSides;
    protected $lastRolled;
    
    
    /**
     * @param int $numSides
     */
    public function __construct($numSides=6)
        {
            if ($numSides%2) {$numSides=6;}
                $this->numSides = $numSides;
                $this->lastRolled = [];
            
        }
        
    private function rollDice(){
        $this->lastRolled[] = rand(1, $this->numSides);
    }
    
    /**
     * @return int[]
     */
    public function getAllRolls(){
        return $this->lastRolled;
        
    }
    
    /**
     * @param int $rollTimes
     * @return int[] Returns all rolls
     */
    public function roll($rollTimes=1){
        // echo $numSides;
        for ($i = 0; $i < $rollTimes; $i++) {
             $this->rollDice();
        }
        return $this->getAllRolls();
        // return $this->average();
        
    }
    
}