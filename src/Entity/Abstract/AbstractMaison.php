<?php
namespace App\Entity\Abstract;

abstract class AbstractMaison
{
    protected string $nom;
    protected string $fondateur;
    protected array $couleurs;
    protected string $animal;
    protected string $fantome;

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $fondateur
     * 
     * @return self
     */
    public function setFondateur(string $fondateur): self
    {
        $this->fondateur = $fondateur;
        return $this;
    }

    /**
     * @return string
     */
    public function getFondateur(): string
    {
        return $this->fondateur;
    }

    /**
     * @param array $couleurs
     * 
     * @return self
     */
    public function setCouleurs(array $couleurs): self
    {
        $this->couleurs = $couleurs;
        return $this;
    }

    /**
     * @return array
     */
    public function getCouleurs(): array
    {
        return $this->couleurs;
    }

    /**
     * @param string $animal
     * 
     * @return self
     */
    public function setAnimal(string $animal): self
    {
        $this->animal = $animal;
        return $this;
    }

    /**
     * @return string
     */
    public function getAnimal(): string
    {
        return $this->animal;
    }

    /**
     * @param string $fantome
     * 
     * @return self
     */
    public function setFantome(string $fantome): self
    {
        $this->fantome = $fantome;
        return $this;
    }

    /**
     * @return string
     */
    public function getFantome(): string
    {
        return $this->fantome;
    }
}