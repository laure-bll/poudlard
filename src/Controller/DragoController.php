<?php
namespace App\Controller;

use App\Controller\Abstract\AbstractLacheController;

final class DragoController extends AbstractLacheController
{
  /**
   * @return string
   */
  public function faireUnCoupBas(): string
  {
    return print_r("{$this->getPrenom()} a encore fait un coup bas." . PHP_EOL);
  }

  /**
   * @return string
   */
  public function fuirLeCombat(): string
  {
    return print_r("{$this->getPrenom()} a fui le combat pour sauver sa peau." . PHP_EOL);
  }
}