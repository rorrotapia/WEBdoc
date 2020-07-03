<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\TabResultatsRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=TabResultatsRepository::class)
 * @ApiResource(
 *     collectionOperations={"GET"},
 *     normalizationContext={"groups"={"read:resultats"}}
 * )
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
     * @ORM\ManyToOne(targetEntity=TabSondage::class, inversedBy="tabResultats",cascade={"persist"})
     * @Groups({"read:resultats"})
     */
    private $sondage;

    /**
     * @ORM\ManyToOne(targetEntity=TabReponse::class, inversedBy="tabResultats",cascade={"persist"})
     * @Groups({"read:resultats"})
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
