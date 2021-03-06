<?php 

class Wizzard extends Character 
{
    private $heal = 3;
    
    public function __construct($name)
    {
        $this->name = $name;
        $this->setStrength();
        $this->setHealthPoints();
        $this->setDefense();
        $this->setTotalStrength();
    }

    protected function bonus()
    {
        if($this->lucky = true){
            $this->healthPoints = $this->healthPoints + 10;
        }
    }

    public function setName($name)
    { 
        $this->name = $name;
        
    }

    public function setStrength()
    {
        $this->strength = 15;
    }

    public function setHealthPoints()
    {
        if(!isset($_SESSION['persoHealthPoints'])){
            $this->healthPoints = 80;
        }else{
            $this->healthPoints = $_SESSION['persoHealthPoints'];
        }
        
    }

    public function setDefense()
    {
        $this->defense = 0;
    }
    public function setTotalStrength()
    {
        $this->totalStrength = $this->strength;
    }

    public function deleteIfDie()
    {
        if ($this->healthPoints <= 0) {
            $_SESSION['persoHealthPoints'] = 80;
        };
    }
}