<?php

namespace App\Entity\Maison;

use App\Entity\Abstract\AbstractMaison;

class Serpentard extends AbstractMaison
{
  
    public function __construct()
    {
        $this->nom = "Serpentard";
    }
}