<?php
require_once 'Vertex.class.php';
Class Vector {
    private $_x;
    private $_y;
    private $_z;
    private $_w = 0.0;
    private $_color;
    private $_origin;
    private $_dest;
    public static $verbose = FALSE;
    
    public static function doc(){
        if (file_exists("Vector.doc.txt") && ($doc = file_get_contents("Vector.doc.txt")))
            return $doc . PHP_EOL;
        else
            return ("File not found". PHP_EOL);
    }
    public function __construct(array $argv){
        if (array_key_exists('orig', $argv))
            $this->_origin = $argv['orig'];
       else
            $this->_origin = new Vertex(array('x'=> 0, 'y'=> 0, 'z' => 0, 'w'=> 1.0));
        $this->_x = $argv['dest']->getX() - $this->_origin->getX();
        $this->_y = $argv['dest']->getY() - $this->_origin->getY();
        $this->_z = $argv['dest']->getZ() - $this->_origin->getZ();
        $this->_w = 0;
        if (self::$verbose)
            printf("Vector( x:%0.2f, y:%0.2f, z:%0.2f, w:%0.2f ) constructed\n", $this->_x, $this->_y, $this->_z, $this->_w);
        $this->_origin->__destruct();
    }
    public function getX(){return $this->_x;}
    public function getY(){return $this->_y;}
    public function getZ(){return $this->_z;}
    public function getW(){return $this->_w;}
    public function __destruct(){
        if (self::$verbose)
           printf("Vector( x:%0.2f, y:%0.2f, z:%0.2f, w:%0.2f ) destructed\n", $this->_x, $this->_y, $this->_z, $this->_w);
    }
    public function __toString(){
            return (sprintf("Vector( x:%0.2f, y:%0.2f, z:%0.2f, w:%0.2f )", $this->_x, $this->_y, $this->_z, $this->_w));
    }
    public function magnitude(){
        return (sqrt(($this->_x * $this->_x) + ($this->_y * $this->_y) + ($this->_z * $this->_z)));
    }
    public function normalize() {
        $norm = $this->magnitude();
        $vect = new Vector (array ('dest' => new Vertex (array ('x' => $this->getX() / $norm, 'y' => $this->getY() / $norm, 'z' => $this->getZ() / $norm))));
        return ($vect);
    }
    public function add($vect){
        $tempvert = new Vertex (array ('x' => $this->getX() + $vect->getX(), 'y' => $this->getY() + $vect->getY(), 'z' => $this->getZ() + $vect->getZ()));
        $vect = new Vector (array ('dest' => $tempvert)); 
        return ($vect);
    }
    public function sub($vect){
        $tempvert = new Vertex (array ('x' => $this->getX() - $vect->getX(), 'y' => $this->getY() - $vect->getY(), 'z' => $this->getZ() - $vect->getZ()));
        $vect = new Vector (array ('dest' => $tempvert)); 
        return ($vect);
    }
    public function scalarProduct($scal){
        $tempvert = new Vertex (array ('x' => $this->getX() * $scal, 'y' => $this->getY() * $scal, 'z' => $this->getZ() * $scal));
        $vect = new Vector (array ('dest' => $tempvert)); 
        return ($vect);
    }
    public function opposite(){
        return ($this->scalarProduct(-1));
    }
    public function dotProduct($vec) {
        return (($this->getX() * $vec->getX()) + ($this->getY() * $vec->getY()) + ($this->getZ() * $vec->getZ()));
    }
    public function crossProduct ($vec)
    {
        $tempvert = new Vertex (array ('z' => ($this->getX() * $vec->getY())-($this->getY() * $vec->getX()), 'x' => ($this->getY() * $vec->getZ())-($this->getZ() * $vec->getY()), 'y' =>($this->getZ() * $vec->getX())-($this->getX() * $vec->getZ())));
        $vect = new Vector (array ('dest' => $tempvert)); 
        return ($vect);
    }
    public function cos($vec){
        return($this->dotProduct($vec) / ($this->magnitude() * $vec->magnitude()));
    }
}
?>