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




?>