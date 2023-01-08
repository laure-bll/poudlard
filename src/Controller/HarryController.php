<?php
namespace App\Controller;

use App\Controller\Abstract\AbstractVoyantController;

final class HarryController extends AbstractVoyantController
{
  /**
   * @return string
   */
  public function parlerFourcheLangue(): string
  {
    return print_r("{$this->getPrenom()} a dit quelque chose que personne n'a compris car il est le seul à parler fourche-langue à Poudlard." . PHP_EOL);
  }
}