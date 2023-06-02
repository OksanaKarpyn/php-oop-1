<?php 

class Movie{
    public $title;
    public $duration;
    public $foto;
    public $genere;
    public function  __construct( $title, $duration, $foto, $genere ){
        $this-> title = $title;
        $this-> duration = $duration;
        $this-> foto = $foto;
       $this-> genere = $genere; 
     
    }
     //metodo set della classe
    public function getNovita(){
    return '  $this-> title = $title, $this-> duration = $duration';
}
}

?>