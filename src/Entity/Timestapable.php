<?php

declare(strict_types=1);

namespace App\Entity;

use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

trait Timestapable
{
    /**
     * @var DateTimeInterface
     * @ORM\Column(type="datetime")
     */
    private DateTimeInterface $createdAt;

    /**
     * @var DateTimeInterface
     * @ORM\Column(type="datetime", nullable=true)
     */
    private DateTimeInterface $updateAt;


    public function getCreatedAt(): DateTimeInterface
    {
        return $this -> createdAt;
    }

    public function getUpdateAt(): ?DateTimeInterface
    {
        return $this -> updateAt;
    }


    public function setUpdateAt(?DateTimeInterface $updateAt): void
    {
        $this -> updateAt = $updateAt;
    }
}