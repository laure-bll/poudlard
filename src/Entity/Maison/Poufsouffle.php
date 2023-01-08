<?php

namespace App\Entity\Maison;

use App\Entity\Abstract\AbstractMaison;

class Poufsouffle extends AbstractMaison
{
  
    public function __construct()
    {
        $this->nom = "Poufsouffle";
    }
}