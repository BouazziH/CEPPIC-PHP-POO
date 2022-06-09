<?php
// extends c'est pour lheriter d'une autre class



class Voiture extends Vehicule{
    

    public function __construct(string $color,int $mass,string $brand)
    {
        $this->couleur = $color;
        $this->masse = $mass;
        $this->marque = $brand;
    }
//getter
    public function getCouleur(): string
    {
        return $this->couleur;
    }
    //setteur
    public function setCouleur(string $color): void
    {
         $this->couleur =$color;
    }


    public function afficherMessage()
    {
        echo "je suis une voiture";
    }
    
    public function afficherEnergie(): float
    {
    $energieCinetique = 0.5 * $this->masse * ($this->vitesse ** 2);
    return $energieCinetique;
    }
    
   public function __destruct()
    {
    echo "<p>object destroyed</p>";
    }

    }

