<?php 
    Class NightsWatch implements IFighter{
        public $perso = array();
        
        public function recruit($val){
            if (method_exists($val, "fight")){
                $this->perso[]=$val;
            }
        }
        public function fight()
        {
            foreach($this->perso as $elem)
                $elem->fight();
        }
    }
?>