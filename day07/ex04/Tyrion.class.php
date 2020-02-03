<?php
Class Tyrion extends Lannister{
    public $perso;

    public function Personnage()
    {
        return("Tyrion");
    }
    public function sleepWith($var)
    {
        if(method_exists($var, "Personnage"))
            $this->perso = $var->Personnage();
        else
            $this->perso = "Sansa";
        if($this->perso == "Cersei" || $this->perso == "Jaime")
            print("Not even if I'm drunk !".PHP_EOL);    
        else
            print("Let's do this.". PHP_EOL);
    }
}
?>