<?php
namespace Classes;

use Interfaces\IBattle;
use Interfaces\IPeople;

class Battle implements IBattle{
    private $peoples;

    public function listPeople(IPeople $people)
    {
        $this->peoples[]=$people;
    }
    public function selected(){
        $c=count($this->peoples);
        if ($c==1){ //if one person in array
            echo (array_pop($this->peoples)->getName()).' - Победил!'."\n";
            return true;
        }
        //$attacker=$this->peoples[array_rand($this->peoples)];//random people
        $attacker_id = array_rand($this->peoples);// id
        $attacker = $this->peoples[$attacker_id];//get object
        do {
            $loozer_id = array_rand($this->peoples);
        } while ($attacker_id == $loozer_id);
        $loozer = $this->peoples[$loozer_id];
        # get two unique random people(objects)
        $this->attack($attacker, $loozer);
    }

    public function attack($attacker, $loozer){
        $hp=rand(1,100);
        echo ($attacker->getName().' бьет '.$loozer->getName().' на '.$hp.' hp из '.$loozer->getHp()."\n" );
        $loozer->DownHp($hp);  //
        if (!$loozer->IsLive()){  // if not a live
            unset($this->peoples[array_search($loozer, $this->peoples)]);//delete from array
            echo $loozer->getName().' -  был убит! '."\n";
        }
        $this->selected();
    }

}
