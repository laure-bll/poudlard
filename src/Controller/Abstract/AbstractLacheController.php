<?php
namespace App\Controller\Abstract;

use App\Controller\Abstract\AbstractController;

abstract class AbstractLacheController extends AbstractController
{
  abstract public function fuirLeCombat(): string;
}