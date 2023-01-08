<?php
namespace App\Controller;

use App\Entity\Personnages\Luna;
use App\Controller\Abstract\AbstractVoyantController;

final class LunaController extends AbstractVoyantController
{
  private $personnage;

  public function __construct(Luna $personnage)
  {
    parent::__construct($personnage);
    $this->personnage = $personnage;
  }
}