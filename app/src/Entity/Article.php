<?php

declare(strict_types=1);

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Controller\ArticleUpdatedAt;
use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=ArticleRepository::class)
 * @ApiResource(
 *     collectionOperations={"get"={"normalization_context"={"groups"="article_read"}}, "post"},
 *     itemOperations={
 *     "get"={"normalization_context"={"groups"="article_details_read"}},
 *     "put",
 *     "patch",
 *     "delete",
 *     "put_updated_at"={
 *          "method"="put",
 *          "path"="/articles/{id}/updated-at",
 *          "controller"=ArticleUpdatedAt::class
 *          }
 *     }
 * )
 */
class Article
{
    use ResourceId;
    use Timestapable;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"article_read","article_details_read","user_details_read"})
     */
    private ?string $name;

    /**
     * @ORM\Column(type="text")
     * @Groups({"article_read","article_details_read","user_details_read"})
     */
    private ?string $content;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="articles")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"article_details_read"})
     */
    private UserInterface $author;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $groupFigure;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $images;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $video;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
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

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getAuthor(): UserInterface
    {
        return $this->author;
    }

    public function setAuthor(UserInterface $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getGroupFigure(): ?string
    {
        return $this->groupFigure;
    }

    public function setGroupFigure(?string $groupFigure): self
    {
        $this->groupFigure = $groupFigure;

        return $this;
    }

    public function getImages(): ?string
    {
        return $this->images;
    }

    public function setImages(?string $images): self
    {
        $this->images = $images;

        return $this;
    }

    public function getVideo(): ?string
    {
        return $this->video;
    }

    public function setVideo(?string $video): self
    {
        $this->video = $video;

        return $this;
    }
}
