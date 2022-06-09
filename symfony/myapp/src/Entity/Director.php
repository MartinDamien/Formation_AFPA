<?php

namespace App\Entity;

use App\Repository\DirectorRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DirectorRepository::class)]
class Director
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $first_name;

    #[ORM\Column(type: 'string', length: 255)]
    private $last_name;

    #[ORM\Column(type: 'string', length: 255)]
    private $cover;

    #[ORM\ManyToMany(targetEntity: Movie::class, mappedBy: 'relation')]
    private $director_id;

    public function __construct()
    {
        $this->director_id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function setLastName(string $last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }

    public function getCover(): ?string
    {
        return $this->cover;
    }

    public function setCover(string $cover): self
    {
        $this->cover = $cover;

        return $this;
    }

    /**
     * @return Collection<int, Movie>
     */
    public function getDirectorId(): Collection
    {
        return $this->director_id;
    }

    public function addDirectorId(Movie $directorId): self
    {
        if (!$this->director_id->contains($directorId)) {
            $this->director_id[] = $directorId;
            $directorId->addRelation($this);
        }

        return $this;
    }

    public function removeDirectorId(Movie $directorId): self
    {
        if ($this->director_id->removeElement($directorId)) {
            $directorId->removeRelation($this);
        }

        return $this;
    }
}
