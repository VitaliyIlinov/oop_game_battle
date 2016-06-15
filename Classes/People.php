<?php
namespace Classes;

use Interfaces\IPeople;

class People implements IPeople{

    private $name;
    private $xp;

    public function __construct($name,$xp)
    {
        $this->name=$name;
        $this->xp=$xp;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getHp(){
        return $this->xp;
    }

    public function downHp($value)
    {
        return $this->xp-=$value;
    }

    public function IsLive()
    {
        /*
         * true if >0
         */
        return $this-> xp > 0;
    }
}