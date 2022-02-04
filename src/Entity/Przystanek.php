<?php

namespace App\Entity;

use App\Repository\PrzystanekRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PrzystanekRepository::class)
 */
class Przystanek
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $przystanek;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $opis;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $plik1;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $plik2;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $plik3;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrzystanek(): ?string
    {
        return $this->przystanek;
    }

    public function setPrzystanek(string $przystanek): self
    {
        $this->przystanek = $przystanek;

        return $this;
    }

    public function getOpis(): ?string
    {
        return $this->opis;
    }

    public function setOpis(?string $opis): self
    {
        $this->opis = $opis;

        return $this;
    }

    public function getPlik1(): ?string
    {
        return $this->plik1;
    }

    public function setPlik1(?string $plik1): self
    {
        $this->plik1 = $plik1;

        return $this;
    }

    public function getPlik2(): ?string
    {
        return $this->plik2;
    }

    public function setPlik2(?string $plik2): self
    {
        $this->plik2 = $plik2;

        return $this;
    }

    public function getPlik3(): ?string
    {
        return $this->plik3;
    }

    public function setPlik3(?string $plik3): self
    {
        $this->plik3 = $plik3;

        return $this;
    }
}
