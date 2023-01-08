<?php
namespace App\Controller;

use App\Entity\Personnages\Harry;
use App\Controller\Abstract\AbstractVoyantController;

final class HarryController extends AbstractVoyantController
{
  private $personnage;

  public function __construct(Harry $personnage)
  {
    parent::__construct($personnage);
    $this->personnage = $personnage;
  }

  /**
   * @return string
   */
  public function parlerFourcheLangue(): string
  {
    return print_r("{$this->getNom()} a dit quelque chose que personne n'a compris car il est le seul à parler fourche-langue à Poudlard." . PHP_EOL);
  }
}