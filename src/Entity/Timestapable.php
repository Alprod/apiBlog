<?php

declare(strict_types=1);

namespace App\Entity;

use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

trait Timestapable
{
    /**
     * @ORM\Column(type="datetime")
     * @Groups({"user_read", "user_details_read","article_details_read","article_read"})
     */
    private DateTimeInterface $createdAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Groups({"user_read", "user_details_read","article_details_read","article_read"})
     */
    private ?DateTimeInterface $updateAt;

    public function getCreatedAt(): DateTimeInterface
    {
        return $this->createdAt;
    }

    public function getUpdateAt(): ?DateTimeInterface
    {
        return $this->updateAt;
    }

    public function setUpdateAt(?DateTimeInterface $updateAt)
    {
        $this->updateAt = $updateAt;

        return $this;
    }
}
