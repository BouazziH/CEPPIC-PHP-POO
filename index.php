<?php
class Voiture{
public $couleur ;
public $masse;
public $marque;
public $vitesse = 0;

public function afficherMessage()
{
    echo "je suis une voiture";
}

public function afficherEnergie(): float
{
$energieCinetique = 0.5 * $this->masse * ($this->vitesse ** 2);
return $energieCinetique;
}

}


$voiture1 = new Voiture();
$voiture1->couleur = "rouge";
$voiture1->masse = 1200;
$voiture1->vitesse .= 30;

echo $voiture1->afficherEnergie();
echo "<br>";
$voiture1->masse = 1180;
echo $voiture1->afficherEnergie();


/* $voiture2 = new Voiture();
$voiture2->couleur = "blue";


var_dump($voiture1);
var_dump($voiture2);
 */
?>