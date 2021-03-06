<?php

class CardArene extends Card
{
    private $class;
    private $imgPath;
    private $healthPoints;
    private $strength;
    private $defense;
    
    public function __construct($class, $healthPoints, $defense, $strength)
    {
        $this->setClass($class);
        $this->setImg();
        $this->setStrength($strength);
        $this->setHealthPoints($healthPoints);
        $this->setDefense($defense);
    }

    public function setClass($class)
    {
        $this->class = $class;
    }

    public function setImg()
    {
        $this->imgPath = "../assets/img/".lcfirst($this->class).".gif";

    }

    public function setHealthPoints($healthPoints)
    {
        $this->healthPoints = $healthPoints;

    }

    public function setStrength($strength)
    {
        $this->strength = $strength;

    }

    public function setDefense($defense)
    {
        $this->defense = $defense;

    }


    public function afficherCardArene($f)
    {
        echo '
            <div class="cardArene">
                <div id="poule-'. $f .'" class="hidden-attack">
                    <img id="hidden-attack-'. $f .'" src="../assets/img/poule.png" alt="">
                </div>

                <div class="cardArene-img">
                    <img id="'. $f .'" class="cardArene-img" src=' . $this->imgPath . ' alt="">
                </div>
                <div class="cardArene-text">
                    '. $this->class .'
                </div>
                <div class="row">
                    <div class="icon">
                        <img src="../assets/img/heart.gif" alt="vie" class="icon-img">
                        <p class="icon-p" id="test'. $f .'">'.$this->healthPoints.'</p>
                    </div>
                    <div class="icon">
                        <img src="../assets/img/shield.gif" alt="vie" class="icon-img">
                        <p class="icon-p">'.$this->defense.'</p>
                    </div>
                    <div class="icon">
                        <img src="../assets/img/fire.gif" alt="vie" class="icon-img">
                        <p class="icon-p">'.$this->strength.'</p>
                    </div>
                </div>
            </div>
        ';
    }

    public function afficherBouton()
    {
        echo '
            <div class="cardArene-atk">
                <button id="attack">Attaquer</button>
            </div>  
        ';
    }

    public function afficherResultat($perso)
    {
        echo '
            <div class="container">
                <div class="row">
                    <div class ="col-sm">
                        <h2>WASTED ! </h2>
                        <p>'.$perso.' est mort ! </p>
                    </div>
                </div>
            </div>  
        ';
    }


}   