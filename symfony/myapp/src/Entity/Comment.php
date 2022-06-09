<?php

namespace App\Entity;

use App\Repository\CommentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentRepository::class)]
class Comment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $author;

    #[ORM\Column(type: 'integer')]
    private $mark;

    #[ORM\Column(type: 'string', length: 255)]
    private $content;

    #[ORM\ManyToMany(targetEntity: movie::class, inversedBy: 'comments')]
    private $movie_id;

    public function __construct()
    {
        $this->movie_id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getMark(): ?int
    {
        return $this->mark;
    }

    public function setMark(int $mark): self
    {
        $this->mark = $mark;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return Collection<int, movie>
     */
    public function getMovieId(): Collection
    {
        return $this->movie_id;
    }

    public function addMovieId(movie $movieId): self
    {
        if (!$this->movie_id->contains($movieId)) {
            $this->movie_id[] = $movieId;
        }

        return $this;
    }

    public function removeMovieId(movie $movieId): self
    {
        $this->movie_id->removeElement($movieId);

        return $this;
    }
}
