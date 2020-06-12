<?php

namespace App\Entity;

use App\Repository\TabReponseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TabReponseRepository::class)
 */
class TabReponse
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=TabSondage::class, inversedBy="tabReponses")
     */
    private $sondage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $reponse;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSondage(): ?TabSondage
    {
        return $this->sondage;
    }

    public function setSondage(?TabSondage $sondage): self
    {
        $this->sondage = $sondage;

        return $this;
    }

    public function getReponse(): ?string
    {
        return $this->reponse;
    }

    public function setReponse(string $reponse): self
    {
        $this->reponse = $reponse;

        return $this;
    }
    public function __toString()
    {
        return $this->reponse;
    }
}
