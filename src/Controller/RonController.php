<?php
namespace App\Controller;

use App\Entity\Personnages\Ron;
use App\Controller\Abstract\AbstractController;

class RonController extends AbstractController
{
  private $personnage;

  public function __construct(Ron $personnage)
  {
    parent::__construct($personnage);
    $this->personnage = $personnage;
  }
}