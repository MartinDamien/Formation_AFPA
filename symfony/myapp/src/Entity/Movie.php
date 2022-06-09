<?php

namespace App\Entity;

use App\Repository\MovieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MovieRepository::class)]
class Movie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $title;

    #[ORM\Column(type: 'string', length: 255)]
    private $description;

    #[ORM\Column(type: 'time')]
    private $duration;

    #[ORM\Column(type: 'string', length: 255)]
    private $date;

    #[ORM\Column(type: 'string', length: 255)]
    private $cover;

    #[ORM\ManyToMany(targetEntity: genre::class, inversedBy: 'director_id')]
    private $genre_id;

    #[ORM\ManyToMany(targetEntity: director::class, inversedBy: 'director_id')]
    private $relation;

    #[ORM\ManyToMany(targetEntity: Comment::class, mappedBy: 'movie_id')]
    private $comments;

    public function __construct()
    {
        $this->genre_id = new ArrayCollection();
        $this->relation = new ArrayCollection();
        $this->comments = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDuration(): ?\DateTimeInterface
    {
        return $this->duration;
    }

    public function setDuration(\DateTimeInterface $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): self
    {
        $this->date = $date;

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
     * @return Collection<int, genre>
     */
    public function getGenreId(): Collection
    {
        return $this->genre_id;
    }

    public function addGenreId(genre $genreId): self
    {
        if (!$this->genre_id->contains($genreId)) {
            $this->genre_id[] = $genreId;
        }

        return $this;
    }

    public function removeGenreId(genre $genreId): self
    {
        $this->genre_id->removeElement($genreId);

        return $this;
    }

    /**
     * @return Collection<int, director>
     */
    public function getRelation(): Collection
    {
        return $this->relation;
    }

    public function addRelation(director $relation): self
    {
        if (!$this->relation->contains($relation)) {
            $this->relation[] = $relation;
        }

        return $this;
    }

    public function removeRelation(director $relation): self
    {
        $this->relation->removeElement($relation);

        return $this;
    }

    /**
     * @return Collection<int, Comment>
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comment $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments[] = $comment;
            $comment->addMovieId($this);
        }

        return $this;
    }

    public function removeComment(Comment $comment): self
    {
        if ($this->comments->removeElement($comment)) {
            $comment->removeMovieId($this);
        }

        return $this;
    }
}
