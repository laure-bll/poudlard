<?php
namespace App\Controller;

use App\Controller\Abstract\AbstractLacheController;

final class NeuvilleController extends AbstractLacheController
{
  /**
   * @return string
   */
  public function fuirLeCombat(): string
  {
    return print_r("{$this->getPrenom()} a fui le combat car il a eu peur." . PHP_EOL);
  }
}