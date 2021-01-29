<?php

declare(strict_types=1);

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Controller\UserUpdatedAt;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository", repositoryClass=UserRepository::class)
 * @ORM\Table(name="`user`")
 * @ApiResource(
 *     collectionOperations={"get"={"normalization_context"={"groups"="user_read"}}, "post"},
 *     itemOperations={
 *     "get"={"normalization_context"={"groups"="user_details_read"}},
 *     "put",
 *     "patch",
 *     "delete",
 *     "put_user_updated"={
 *          "method"="put",
 *          "path"="/users/{id}/user-updated",
 *          "controller"=UserUpdatedAt::class
 *          }
 *     }
 * )
 */
class User implements UserInterface
{
    use ResourceId;
    use Timestapable;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     * @Groups({"user_read", "user_details_read","article_details_read", "article_read"})
     */
    private ?string $email;

    /**
     * @ORM\Column(type="json")
     */
    private array $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private string $password;

    /**
     * @ORM\OneToMany(targetEntity=Article::class, mappedBy="author", orphanRemoval=true)
     * @Groups({"user_details_read"})
     */
    private Collection $articles;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     * @Groups({"user_read", "user_details_read","article_details_read"})
     */
    private ?string $firstname;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     * @Groups({"user_read", "user_details_read","article_details_read"})
     */
    private ?string $lastname;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Groups({"user_read", "user_details_read","article_details_read", "article_read"})
     */
    private ?string $pseudo;

    public function __construct()
    {
        $this->articles = new ArrayCollection();

        $this->createdAt = new \DateTimeImmutable();

    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
        return 'adn';
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    /**
     * @return Collection|Article[]
     */
    public function getArticles(): Collection
    {
        return $this->articles;
    }

    public function addArticle(Article $article): self
    {
        if (!$this->articles->contains($article)) {
            $this->articles[] = $article;
            $article->setAuthor($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): self
    {
        if ($this->articles->removeElement($article)) {
            // set the owning side to null (unless already changed)
            if ($article->getAuthor() === $this) {
                $article->setAuthor(null);
            }
        }

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(?string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(?string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }
}
