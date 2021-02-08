<?php

declare(strict_types=1);

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\DateFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\BooleanFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\NumericFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\RangeFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\ExistsFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Controller\UserUpdatedAt;
use Symfony\Component\Validator\Constraints as Assert;

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
 * @ApiFilter(SearchFilter::class, properties={"email":"partial","lastname":"start"})
 * @ApiFilter(DateFilter::class, properties={"createdAt"})
 * @ApiFilter(BooleanFilter::class, properties={"status"})
 * @ApiFilter(NumericFilter::class, properties={"age"})
 * @ApiFilter(RangeFilter::class, properties={"age"})
 * @ApiFilter(ExistsFilter::class, properties={"updateAt"})
 * @ApiFilter(OrderFilter::class, properties={"id"})
 * @UniqueEntity("email", message="Cette email est déjà utilisé")
 */
class User implements UserInterface
{
    use ResourceId;
    use Timestapable;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     * @Groups({"user_read", "user_details_read","article_details_read", "article_read"})
     * @Assert\NotBlank(message="L'email est obligatoire")
     * @Assert\Email(message="Le format de l'email est invalide")
     */
    private ?string $email;

    /**
     * @ORM\Column(type="json")
     */
    private array $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     * @Groups({"user_details_read"})
     * @Assert\NotBlank(message="Le Mot de Passe est obligatoire")
     * @Assert\Length(
     *     min=8,
     *     max=16,
     *     minMessage="Votre Mot de Passe doit contenir au minimum {{ limit }} caractères",
     *     maxMessage="Vous dépassez la longuer maximal de votre Mot de Passe qui est de {{ limit }} caractères"
     * )
     * @Assert\Regex(
     *     pattern= "/^\S*(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/",
     *     message="Désolé mais {{ value }}, doit comporter au moins 8 caractères, 1 chiffre, un caractère majuscule, un caractère minuscule."
     * )
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
     * @Assert\Length(
     *     min=3,
     *     minMessage="Votre pseudo doit contenir au minimum {{ limit }} caractères"
     * )
     */
    private ?string $pseudo;

    /**
     * @ORM\Column(type="boolean")
     * @Groups({"user_read", "user_details_read","article_details_read", "article_read"})
     */
    private ?bool $status;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"user_read", "user_details_read","article_details_read", "article_read"})
     */
    private ?int $age;

    private UserPasswordEncoderInterface $_encoder;

    public function __construct()
    {
        $this->articles = new ArrayCollection();

        $this->createdAt = new \DateTimeImmutable();
        $this->status = false;
        $this->age = 20;

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
        if ($this->articles->contains($article)) {
            $this->articles->removeElement($article);
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

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }
}
