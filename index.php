<?php

spl_autoload_register(function ($className) {
    require './classes/' . $className . '.php';
});

$voiture1 = new Voiture("blue", "1000", "peugeot");
/* $voiture1->couleur = "rouge";
$voiture1->masse = 1200;
$voiture1->vitesse .= 30; */

$voiture1->setCouleur("yellow");
echo $voiture1->getCouleur();

/* 
echo $voiture1->afficherEnergie();
echo "<br>";
$voiture1->masse = 1180;
echo $voiture1->afficherEnergie(); */


/* $voiture2 = new Voiture();
$voiture2->couleur = "blue";


var_dump($voiture1);
var_dump($voiture2);
 */
