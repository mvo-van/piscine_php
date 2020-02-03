<?php
require_once 'Color.class.php';
Class  Vertex{
    
    private $_x;
    private $_y;
    private $_z;
    private $_w =  1.0;
    private $_color ;
    public static $verbose = False;

    public static function doc(){
        if (file_exists("Vertex.doc.txt") && ($doc = file_get_contents("Vertex.doc.txt")))
            return $doc . PHP_EOL;
        else
            return ("File not found". PHP_EOL);
    }

    public function getX(){return $this->_x;}
    public function getY(){return $this->_y;}
    public function getZ(){return $this->_z;}
    public function getW(){return $this->_w;}
    public function getColor(){return $this->_color;}

    public function setX($v){$this->_x = $v;return;}
    public function setY($v){$this->_y = $v;return;}
    public function setZ($v){$this->_z = $v;return;}
    public function setW($v){$this->_w = $v;return;}
    public function setColor($v){$this->_color = $v;return;}


    public function __construct(array $kwargs){ 
            $this->setX($kwargs['x']);
            $this->setY($kwargs['y']);
            $this->setZ($kwargs['z']);
            if(array_key_exists('w',$kwargs))
                $this->setW($kwargs['w']);
            if(array_key_exists('color',$kwargs))
                $this->setColor($kwargs['color']);
            else
                $this->setColor(new Color(array('red'=>255,'green'=>255,'blue'=>255)));
            if(self::$verbose == true)
                printf ("Vertex( x:%5.2f, y:%5.2f, z:%.2f, w:%.2f, Color( red:%4d, green:%4d, blue:%4d ) ) constructed\n",  $this->getX(),$this->getY(),$this->getZ(),$this->getW(), $this->getColor()->red, $this->getColor()->green, $this->getColor()->blue);
    }

    public function __toString(){
        if(static::$verbose)
            $str = sprintf ("Vertex( x:%5.2f, y:%5.2f, z:%.2f, w:%.2f, Color( red:%4d, green:%4d, blue:%4d ) )",  $this->getX(),$this->getY(),$this->getZ(),$this->getW(), $this->getColor()->red, $this->getColor()->green, $this->getColor()->blue);
        else
            $str = sprintf ("Vertex( x:%5.2f, y:%5.2f, z:%.2f, w:%.2f )",  $this->getX(),$this->getY(),$this->getZ(),$this->getW());
        return($str);
    }

    public function __destruct(){
        if(self::$verbose == true)
            printf ("Vertex( x:%5.2f, y:%5.2f, z:%.2f, w:%.2f, Color( red:%4d, green:%4d, blue:%4d ) ) destructed\n",  $this->getX(),$this->getY(),$this->getZ(),$this->getW(), $this->getColor()->red, $this->getColor()->green, $this->getColor()->blue);
    }
}
?>