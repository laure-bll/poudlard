<?php
namespace App\Controller\Abstract;

use App\Controller\Abstract\AbstractController;

abstract class AbstractVoyantController extends AbstractController {

  /**
   * @param string $fantome
   * 
   * @return string
   */
  public function voirLesFantomes(string $fantome): string
  {
    return print_r("{$this->getNom()} a vu le fantôme de $fantome." . PHP_EOL);
  }
}