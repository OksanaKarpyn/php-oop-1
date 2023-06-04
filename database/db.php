<?php
$primoFilm= new Movie('harry potter', '140min ','fantasy',' ');
// set
$primoFilm->setNovita('alice in wonderland');
// get
 echo $primoFilm->getNovita();
// partials
$primo_film =[
    new Movie('Harry Potter', '150min','https://images.unsplash.com/photo-1600189261867-30e5ffe7b8da?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80',[new genere('fantasy')]),
    new Movie('Pirati', '110min','https://images.unsplash.com/photo-1590015552438-4c2ca2887c30?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80',[new genere('fantasy-aventura')]),
    new Movie('Alice', '110min','https://images.unsplash.com/photo-1637011636272-4cc148fb3e9d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=685&q=80',[new genere('fantasy-aventura')]),
    new Movie('Anabel', '110min','https://images.unsplash.com/photo-1590015552438-4c2ca2887c30?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80',[new genere('horror')]),
    new Movie('Titanic', '110min','https://images.unsplash.com/photo-1616262373426-18bfa28bafab?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80',[new genere('drama-melodrama')]),
    new Movie('Friends', '110min','https://images.unsplash.com/photo-1506782081254-09bcfd996fd6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fGZyaWVuZHN8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60',[new genere('comedy')]),
    new Movie('Magic-scool', '110min','https://images.unsplash.com/photo-1616262373426-18bfa28bafab?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80',[new genere('fantasy-horror')]),
    new Movie('Alice', '110min','https://images.unsplash.com/photo-1637011636272-4cc148fb3e9d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=685&q=80',[new genere('fantasy-aventura')]),
   ] 

?>