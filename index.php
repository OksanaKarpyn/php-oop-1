<?php
class Movie{
    public $categorie;
    public $anno_Produzione;
    public $paese;
    public $nome;
    // costruttore
    function  __construct( $p_categorie, $p_anno_Produzione, $p_paese, $p_nome ){
        $this-> categorie = $p_categorie;
        $this-> anno_Produzione = $p_anno_Produzione;
        $this-> paese = $p_paese;
        $this-> nome = $p_nome ;
    }
    //metodo set della classe
   public function setNovita($p_anno,$_nome){
        $this-> anno_Produzione = $p_anno;
        $this-> nome = $_nome;
    }
    // metodo get nella classe
   public function getDorame(){
        return $this->nome.' '. $this->paese.' '.'serie';
    }
}

// modo dinamico
$film = new Movie( 'horror', 2022, 'USA', 'ANABEL' );
var_dump($film);
// stampa metodo set
$film->setNovita(2021 , 'Harry Potter');
// stampa metodo set
var_dump($film);
$dorame = $film->getDorame();
//var_dump($dorame);
echo $dorame;

$serie = new Movie( 'cartone', 2023, 'UA', 'MAVKA' );
var_dump($serie);
 
// modo statico
// $film = new Movie();
// $film -> categorie = 'fantasy';
// $film -> anno_produzione = '2000';
// $film -> paese = 'Germany';


// $serie = new Movie();
// $serie -> categorie = 'dramma';
// $serie -> anno_produzione = '2010';
// $serie -> paese = 'Italy';



?>