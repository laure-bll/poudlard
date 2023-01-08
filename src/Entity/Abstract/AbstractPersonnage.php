<?php
namespace App\Entity\Abstract;

use App\Entity\Abstract\AbstractMaison;

abstract class AbstractPersonnage
{
    protected string $nom;
    protected ?AbstractMaison $maison;

    public function __construct(string $nom)
    {
      $this->nom = $nom;
      $this->maison = null;
    }

    public function setNom(string $nom): self
    {
      $this->nom = $nom;
      return $this;
    }

    public function getNom(): string
    {
      return $this->nom;
    }

    public function setMaison(AbstractMaison $maison): self
    {
      $this->maison = $maison;
      return $this;
    }

    public function getMaison(): ?AbstractMaison
    {
      return $this->maison;
    }
}