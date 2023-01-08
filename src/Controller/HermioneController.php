<?php
namespace App\Controller;

use App\Controller\Abstract\AbstractController;

final class HermioneController extends AbstractController
{
  /**
   * @return string
   */
  public function memoriserDesConaissances(): string
  {
    return print_r("{$this->getPrenom()} a appris de nouveaux sorts." . PHP_EOL);
  }

  /**
   * @return string
   */
  public function sauverLaSituation(): string
  {
    return print_r("{$this->getPrenom()} a encore sauvé la situation grâce à son esprit brillant." . PHP_EOL);
  }
}