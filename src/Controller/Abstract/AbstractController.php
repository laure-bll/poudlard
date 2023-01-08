<?php
namespace App\Controller\Abstract;

use App\Entity\Abstract\AbstractPersonnage;
use App\Interface\AbstractControllerInterface;

abstract class AbstractController extends AbstractPersonnage implements AbstractControllerInterface
{
  public function __construct(AbstractPersonnage $personnage)
  {
    parent::__construct($personnage->nom);
  }

  /** 
   * @param string $nomDuSort
   * @param AbstractPersonnage
   * 
   * @return string
   */
  public function lancerUnSort(string $nomDuSort, AbstractPersonnage $personnage): string
  {
    return print_r("{$this->getNom()} a lancé le sort {$nomDuSort} à {$personnage->getNom()}." . PHP_EOL);
  }

  /** 
   * @return string
   */
  public function volerSurUnBalais(): string
  {
    return print_r("{$this->getNom()} vole sur son balais." . PHP_EOL);
  }
}