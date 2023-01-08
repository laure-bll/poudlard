<?php
namespace App\Controller;

use App\Entity\Personnages\Drago;
use App\Controller\Abstract\AbstractLacheController;

final class DragoController extends AbstractLacheController
{
  private $personnage;

  public function __construct(Drago $personnage)
  {
    parent::__construct($personnage);
    $this->personnage = $personnage;
  }

  /**
   * @return string
   */
  public function faireUnCoupBas(): string
  {
    return print_r("{$this->getNom()} a encore fait un coup bas." . PHP_EOL);
  }

  /**
   * @return string
   */
  public function fuirLeCombat(): string
  {
    return print_r("{$this->getNom()} a fui le combat pour sauver sa peau." . PHP_EOL);
  }
}