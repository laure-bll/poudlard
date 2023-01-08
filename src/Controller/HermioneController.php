<?php
namespace App\Controller;

use App\Entity\Personnages\Hermione;
use App\Controller\Abstract\AbstractController;

final class HermioneController extends AbstractController
{
  private $personnage;

  public function __construct(Hermione $personnage)
  {
    parent::__construct($personnage);
    $this->personnage = $personnage;
  }

  /**
   * @return string
   */
  public function memoriserDesConaissances(): string
  {
    return print_r("{$this->getNom()} a appris de nouveaux sorts." . PHP_EOL);
  }

  /**
   * @return string
   */
  public function sauverLaSituation(): string
  {
    return print_r("{$this->getNom()} a encore sauvé la situation grâce à son esprit brillant." . PHP_EOL);
  }
}