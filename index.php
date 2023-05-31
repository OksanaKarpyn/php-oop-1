<?php
class Movie{
    public $categorie;
    public $anno_Produzione;
    public $paese;
    public $nome;
    // costruttore
    function  __construct( $_categorie, $_anno_Produzione, $_paese, $_nome ){
        $this-> categorie = $_categorie;
        $this-> anno_Produzione = $_anno_Produzione;
        $this-> paese = $_paese;
        $this-> nome = $_nome ;
    }
    
}
// modo dinamico
$film = new Movie( 'horror', 2022, 'USA', 'ANABEL' );
var_dump($film);
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