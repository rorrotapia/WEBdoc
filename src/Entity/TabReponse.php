<?php

namespace App\Entity;

use App\Repository\TabReponseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\OneToMany(targetEntity=TabResultats::class, mappedBy="reponse")
     */
    private $tabResultats;

    public function __construct()
    {
        $this->tabResultats = new ArrayCollection();
    }

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

    /**
     * @return Collection|TabResultats[]
     */
    public function getTabResultats(): Collection
    {
        return $this->tabResultats;
    }

    public function addTabResultat(TabResultats $tabResultat): self
    {
        if (!$this->tabResultats->contains($tabResultat)) {
            $this->tabResultats[] = $tabResultat;
            $tabResultat->setReponse($this);
        }

        return $this;
    }

    public function removeTabResultat(TabResultats $tabResultat): self
    {
        if ($this->tabResultats->contains($tabResultat)) {
            $this->tabResultats->removeElement($tabResultat);
            // set the owning side to null (unless already changed)
            if ($tabResultat->getReponse() === $this) {
                $tabResultat->setReponse(null);
            }
        }

        return $this;
    }
}
