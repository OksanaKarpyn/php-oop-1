<?php

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
?>