<?php
Class Color {
    public $red = 0;
    public $green = 0;
    public $bleu = 0;
    static $verbose =  False;

    public static function doc(){
        if (file_exists("Color.doc.txt") && ($doc = file_get_contents("Color.doc.txt")))
            return $doc . PHP_EOL;
        else
            return ("File not found". PHP_EOL);
    }
    public function __construct(array $kwargs){  
            if(array_key_exists('rgb',$kwargs))
            {
                $this->red = ord(chr($kwargs['rgb']>>16));
                $this->green = ord(chr($kwargs['rgb']>>8));
                $this->blue = ord(chr($kwargs['rgb']));
            }
            else
            {
                if(array_key_exists('red',$kwargs))
                    $this->red = ord(chr($kwargs['red']));
                if(array_key_exists('green',$kwargs))
                    $this->green = ord(chr($kwargs['green']));
                if(array_key_exists('blue',$kwargs))
                    $this->blue = ord(chr($kwargs['blue']));
                
            }
            if(self::$verbose == true)
                printf ("Color( red:%4d, green:%4d, blue:%4d ) constructed.\n",  $this->red,$this->green,$this->blue);
    }

    public function add($para){
        return(new Color( array( 'red' => ($this->red + $para->red), 'green' =>($this->green + $para->green) , 'blue' =>($this->blue + $para->blue)) ));
    }
    public function sub($para){
        return(new Color( array( 'red' => ($this->red - $para->red), 'green' =>($this->green - $para->green) , 'blue' =>($this->blue - $para->blue)) ));
    }
    public function mult($para){
        return(new Color( array( 'red' => ($this->red * $para), 'green' =>($this->green * $para) , 'blue' =>($this->blue * $para)) ));
    }
    public function __toString(){
            return(sprintf ("Color( red:%4d, green:%4d, blue:%4d )",  $this->red, $this->green, $this->blue));
    }

    public function __destruct(){
        if(self::$verbose == true)
                printf ("Color( red:%4d, green:%4d, blue:%4d ) destructed.\n",  $this->red,$this->green,$this->blue);
    }
}
?>