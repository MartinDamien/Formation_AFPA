<?php

namespace App\Entity;

use App\Repository\GenreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GenreRepository::class)]
class Genre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\ManyToMany(targetEntity: Movie::class, mappedBy: 'genre_id')]
    private $director_id;

    public function __construct()
    {
        $this->director_id = new ArrayCollection();
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
            $directorId->addGenreId($this);
        }

        return $this;
    }

    public function removeDirectorId(Movie $directorId): self
    {
        if ($this->director_id->removeElement($directorId)) {
            $directorId->removeGenreId($this);
        }

        return $this;
    }
}
