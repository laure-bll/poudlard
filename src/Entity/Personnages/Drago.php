<?php
namespace App\Entity\Personnages;

use App\Entity\Abstract\AbstractPersonnage;

class Drago extends AbstractPersonnage
{
  public function __construct(string $nom)
  {
    parent::__construct($nom);
    $this->nom = $nom;
  }
}