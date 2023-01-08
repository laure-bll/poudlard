<?php

namespace App\Entity\Maison;

use App\Entity\Abstract\AbstractMaison;

class Serdaigle extends AbstractMaison
{
  
    public function __construct()
    {
        $this->nom = "Serdaigle";
    }
}