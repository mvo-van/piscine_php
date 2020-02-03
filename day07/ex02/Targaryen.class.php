<?php
Class Targaryen{
    public function resistsFire(){
        return False;
    }
    public function getBurned()
    {
        $fire = static::resistsFire();
        if($fire == True)
            return("emerges naked but unharmed");
        else
            return("burns alive");
    }
}
?>