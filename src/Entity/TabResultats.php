<?php

namespace App\Entity;

use App\Repository\TabResultatsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TabResultatsRepository::class)
 */
class TabResultats
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=TabSondage::class, inversedBy="tabResultats")
     */
    private $sondage;

    /**
     * @ORM\ManyToOne(targetEntity=TabReponse::class, inversedBy="tabResultats")
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

    public function getReponse(): ?TabReponse
    {
        return $this->reponse;
    }

    public function setReponse(?TabReponse $reponse): self
    {
        $this->reponse = $reponse;

        return $this;
    }
}
