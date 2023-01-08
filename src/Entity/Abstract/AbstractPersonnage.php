<?php
namespace App\Entity\Abstract;

use App\Entity\Abstract\AbstractMaison;

abstract class AbstractPersonnage
{
    protected string $prenom;
    protected string $nom;
    protected AbstractMaison $maison;

    public function setPrenom(string $prenom): self
    {
      $this->prenom = $prenom;
      return $this;
    }

    public function getPrenom(): string
    {
      return $this->prenom;
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

    public function getMaison(): AbstractMaison
    {
      return $this->maison;
    }
}