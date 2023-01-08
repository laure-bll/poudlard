<?php

use App\Entity\Personnages\Ron;
use PHPUnit\Framework\TestCase;
use App\Controller\RonController;
use App\Entity\Personnages\Drago;
use App\Controller\DragoController;
use App\Entity\Abstract\AbstractPersonnage;

final class DragoControllerTest extends TestCase
{
  public function testLancerUnSort() : void
  {
    $drago = new Drago("Drago Malefoy");
    $drago = new DragoController($drago);

    $cible = new Ron("Ron Weasly");
    $cible = new RonController($cible);
    $sort = "peu importe";

    $result = print_r("{$drago->getNom()} a lancé le sort {$sort} à {$cible->getNom()}." . PHP_EOL);

    $this->assertEquals($result, $drago->lancerUnSort($sort, $cible));
  }
}