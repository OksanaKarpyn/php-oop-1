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
    // metodo set 
    function setNovita($title){
        $this->title= $title;
    }
     //metodo get della classe
    public function getNovita(){
    return  $this->title. $this->duration. $this->genere;
}
}
// $primoFilm= new Movie('harry potter', '140min ','fantasy',' ');
// // set
// $primoFilm->setNovita('alice in wonderland');
// // get
//  echo $primoFilm->getNovita();
?>