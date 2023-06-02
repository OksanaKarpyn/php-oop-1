<?php
include_once __DIR__.'./models/movie.php';
// class Movie{
//     public $title;
//     public $duration;
//     public $foto;
//     public $genere;
//     public function  __construct( $title, $duration, $foto, $genere ){
//         $this-> title = $title;
//         $this-> duration = $duration;
//         $this-> foto = $foto;
//        $this-> genere = $genere; 
     
//     }
//      //metodo set della classe
//     public function getNovita(){
//     return '  $this-> title = $title, $this-> duration = $duration';
// }
// }
include_once __DIR__.'./models/genere.php';
// class genere {
//     public $Fantasy;
//     public $Comico;
//     public $Aventura;
   
// // costructor
// public function __construct($p_fantasy){ 
//     $this-> Fantasy = $p_fantasy;
//     //$this-> Comico = $p_comico;
//     //$this-> Aventura = $_aventura;
    

//  } 
// }
include_once __DIR__.'./database/db.php';
// partials
// $primo_film =[
//   new Movie('Harry Potter', '150min','https://images.unsplash.com/photo-1600189261867-30e5ffe7b8da?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80',[new genere('fantasy')]),
//   new Movie('Pirati', '110min','https://images.unsplash.com/photo-1590015552438-4c2ca2887c30?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80',[new genere('fantasy-aventura')]),
//   new Movie('Alice', '110min','https://images.unsplash.com/photo-1637011636272-4cc148fb3e9d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=685&q=80',[new genere('fantasy-aventura')]),
//   new Movie('Anabel', '110min','https://images.unsplash.com/photo-1590015552438-4c2ca2887c30?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80',[new genere('horror')]),
//   new Movie('Titanic', '110min','https://images.unsplash.com/photo-1616262373426-18bfa28bafab?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80',[new genere('drama-melodrama')]),
//   new Movie('Friends', '110min','https://images.unsplash.com/photo-1506782081254-09bcfd996fd6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fGZyaWVuZHN8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60',[new genere('comedy')]),
//   new Movie('Magic-scool', '110min','https://images.unsplash.com/photo-1616262373426-18bfa28bafab?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80',[new genere('fantasy-horror')]),
//   new Movie('Alice', '110min','https://images.unsplash.com/photo-1637011636272-4cc148fb3e9d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=685&q=80',[new genere('fantasy-aventura')]),
//  ] 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="wrapper">
        <header class="container my-5">
            <h1>Movies</h1>
        </header>
        <div class="container">
            <div class=" row d-flex">
                <?php foreach($primo_film as $elem) {?>
                <div class="col-3 my-4">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $elem->foto ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"><?php echo $elem -> title ?></p>
                            <p class="card-text"><?php echo $elem -> duration ?></p>
                            <?php foreach($elem->genere as $item){?>
                            <p><?php echo $item->Fantasy ?></p>
                            <?php }?>

                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>