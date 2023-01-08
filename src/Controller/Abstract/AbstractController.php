<?php
namespace App\Controller\Abstract;

use App\Entity\Abstract\AbstractPersonnage;
use App\Interface\AbstractControllerInterface;

abstract class AbstractController extends AbstractPersonnage implements AbstractControllerInterface
{
  /** 
   * @param string $nomDuSort
   * @param AbstractPersonnage
   * 
   * @return string
   */
  public function lancerUnSort(string $nomDuSort, AbstractPersonnage $personnage): string
  {
    return print_r("{$this->getPrenom()} a lancé le sort {$nomDuSort} à {$personnage->getPrenom()}." . PHP_EOL);
  }

  /** 
   * @return string
   */
  public function volerSurUnBalais(): string
  {
    return print_r("{$this->getPrenom()} vole sur son balais." . PHP_EOL);
  }
}