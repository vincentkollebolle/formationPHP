<?php
// KISS
// NTU
// RTFM
// DRY

//Class ................... OK 
//Instance de classe (objet) ......... OK
//$this ........................... OK
//constructeur .................. OK 
//encapsulation..................... OK 
//getter & setter ....................... OK 


// Pour passer de la classe à une instance de la classe il faut en quelques sorte
// CONSTRUIRE l'objet.  
?>
<?php
    //main.php
    include "Voiture.php";
    $voitureDeNour = new Voiture("gris charbon","renault","XXXXX"); //insctance de la classe Voiture
    $voitureDeChristophe = new Voiture("gris","volkswagen", "YYYYY"); // autre instance de la classe Voiture

    
    $voitureDeNour->avancer(); 
    $voitureDeChristophe->reculer(); 

?>


