<?php

namespace App\Entity;

use App\Repository\FilterRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FilterRepository::class)]
class Filter
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    private ?string $slug = null;

    #[ORM\ManyToMany(targetEntity: Marker::class, inversedBy: 'filters')]
    private Collection $marker;

    public function __construct()
    {
        $this->marker = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): static
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return Collection<int, Marker>
     */
    public function getMarker(): Collection
    {
        return $this->marker;
    }

    public function addMarker(Marker $marker): static
    {
        if (!$this->marker->contains($marker)) {
            $this->marker->add($marker);
        }

        return $this;
    }

    public function removeMarker(Marker $marker): static
    {
        $this->marker->removeElement($marker);

        return $this;
    }
}
