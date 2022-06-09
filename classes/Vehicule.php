<?php
// const pour declarrer une variable constante
//abstract c'est pour forcer l'heritage
// on peut pas instentier pas new vehicule 
abstract class Vehicule
{

public const TVA = 20;

protected int $masse;
protected float $vitesse = 0;
protected int $capacite;
protected string $marque;


public function afficherEnergie(): float
    {
    $energieCinetique = 0.5 * $this->masse * ($this->vitesse ** 2);
    return $energieCinetique;
    }


}
