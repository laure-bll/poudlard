<?php

namespace App\Entity\Maison;

use App\Entity\Abstract\AbstractMaison;

class Gryffondor extends AbstractMaison
{

    public function __construct()
    {
        $this->nom = "Gryffondor";
    }
}