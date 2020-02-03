<?php
Class Jaime extends Lannister{
    public $perso;

    public function Personnage()
    {
        return("Jaime");
    }
    public function sleepWith($var)
    {
        if(method_exists($var, "Personnage"))
            $this->perso = $var->Personnage();
        else
            $this->perso = "Sansa";
        if($this->perso == "Cersei")
            print("With pleasure, but only in a tower in Winterfell, then.".PHP_EOL);
        else if($this->perso == "Tyrion")
            print("Not even if I'm drunk !".PHP_EOL);    
        else
            print("Let's do this.". PHP_EOL);
    }
}
?>