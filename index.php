<?php
class Movie{
    public $attori;
    public $anno_Produzione;
    public $paese;
    public $nome;
    public $genere;
    // costruttore
    function  __construct( $p_attori, $p_anno_Produzione, $p_paese, $p_nome,$p_genere){
        $this-> attori = $p_attori;
        $this-> anno_Produzione = $p_anno_Produzione;
        $this-> paese = $p_paese;
        $this-> nome = $p_nome;
        $this-> genere = $p_genere;
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
$film = new Movie('attoreAnabel', 2022, 'usa', 'ANABEL',new Genere( 'fantasy-film-Harry Potter', 'comico-fil-Fantozzi','aventura-film-alice'));
var_dump($film);
echo $film->paese;
// stampa metodo set
$film->setNovita(2021 , 'Harry Potter');
// stampa metodo set
var_dump($film);
$dorame = $film->getDorame();
// stampa metodo get 
//var_dump($dorame);
echo $dorame;

$serie = new Movie( 'attoreMavka', 2023, 'UA', 'MAVKA',new Genere( 'fantasy-serie-vampires', 'comico-serie-camedy_club','aventura-serie-pirati') );
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



class Genere{
    public $Fantasy;
    public $Comico;
    public $Aventura;
    public $Azione;
    public $Storico;
    public $horror;
// costructor
public function __construct($p_fantasy,$p_comico,$_aventura){ 
    $this-> Fantasy = $p_fantasy;
    $this-> Comico = $p_comico;
    $this-> Aventura = $_aventura;

}
   
}
$classGenere = new Genere( 'fantasy-film-Harry Potter', 'comico-fil-Fantozzi','aventura-film-alice')
?>