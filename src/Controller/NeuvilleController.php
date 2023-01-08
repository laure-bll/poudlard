<?php
namespace App\Controller;

use App\Entity\Personnages\Neuville;
use App\Controller\Abstract\AbstractLacheController;

final class NeuvilleController extends AbstractLacheController
{
  private $personnage;

  public function __construct(Neuville $personnage)
  {
    parent::__construct($personnage);
    $this->personnage = $personnage;
  }

  /**
   * @return string
   */
  public function fuirLeCombat(): string
  {
    return print_r("{$this->getNom()} a fui le combat car il a eu peur." . PHP_EOL);
  }
}