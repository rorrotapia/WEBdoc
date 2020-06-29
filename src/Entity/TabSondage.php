<?php

namespace App\Entity;

use App\Repository\TabSondageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TabSondageRepository::class)
 */
class TabSondage
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $question;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\OneToMany(targetEntity=TabReponse::class, mappedBy="sondage",cascade={"remove"})
     */
    private $tabReponses;

    public function __construct()
    {
        $this->tabReponses = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(string $question): self
    {
        $this->question = $question;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Collection|TabReponse[]
     */
    public function getTabReponses(): Collection
    {
        return $this->tabReponses;
    }

    public function addTabReponse(TabReponse $tabReponse): self
    {
        if (!$this->tabReponses->contains($tabReponse)) {
            $this->tabReponses[] = $tabReponse;
            $tabReponse->setSondage($this);
        }

        return $this;
    }

    public function removeTabReponse(TabReponse $tabReponse): self
    {
        if ($this->tabReponses->contains($tabReponse)) {
            $this->tabReponses->removeElement($tabReponse);
            // set the owning side to null (unless already changed)
            if ($tabReponse->getSondage() === $this) {
                $tabReponse->setSondage(null);
            }
        }

        return $this;
    }
    public function __toString()
    {
        return $this->question;
    }

}
