<?php
namespace App\Controller;

use App\Entity\Personnages\Ginny;
use App\Controller\Abstract\AbstractController;

final class GinnyController extends AbstractController
{
  private $personnage;

  public function __construct(Ginny $personnage)
  {
    parent::__construct($personnage);
    $this->personnage = $personnage;
  }
}