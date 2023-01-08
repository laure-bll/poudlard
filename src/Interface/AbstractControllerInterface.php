<?php
namespace App\Interface;

use App\Entity\Abstract\AbstractPersonnage;

interface AbstractControllerInterface
{
  public function lancerUnSort(string $nomDuSort, AbstractPersonnage $personnage): string;

  public function volerSurUnBalais(): string;
}