<?php
class Movie{
    public $categorie;
    public $annoProduzione;
    public $paese;
    
}

$film= new Movie();
$film -> categorie = 'fantasy';
$film -> anno_produzione = '2000';
$film -> paese = 'germany';
var_dump($film)


?>