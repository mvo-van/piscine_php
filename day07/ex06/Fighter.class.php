<?php
    Class Fighter{
        public $soldat;

        protected function __construct($val)
        {
            $this->soldat = $val;
            if(!(method_exists($this, "fight"))){
                $this->fight("fdakj");
            }
        }
}
?>