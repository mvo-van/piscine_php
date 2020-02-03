<?php
    Class UnholyFactory{
        public $tab = array();


        public function absorb($val)
        {
            $deja = FALSE;
            if(!(property_exists($val, "soldat")))
                print("(Factory can't absorb this, it's not a fighter)".PHP_EOL);
            else{
                foreach($this->tab as $elem)
                {
                    if($val->soldat == $elem)
                        $deja = TRUE;
                }
                if($deja == FALSE){
                    $this->tab[]=$val->soldat;
                    print("(Factory absorbed a fighter of type ");}
                else
                    print("(Factory already absorbed a fighter of type ");
                print($val->soldat.")".PHP_EOL);
            }
        }
        public function fabricate($val){
            if($val == "foot soldier" || $val == "archer" || $val == "assassin")
            {
                print("(Factory fabricates a fighter of type $val)".PHP_EOL);
                if($val == "foot soldier"){
                    return(new Footsoldier());}
                else if($val == "archer")
                    return(new Archer());
                else if($val == "assassin")
                    return(new Assassin());
            }
            else
                print("(Factory hasn't absorbed any fighter of type $val)".PHP_EOL);
            return($null);
        }
    }

?>