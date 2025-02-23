<?php

namespace Src\BaseProject\Entity\Domian;

use DateTime;

class DomainEntity
{
    private ?int $id;
    private string $name;
    private ?string $description;
    private bool $isActive;
    protected ?DateTime $createdAt;
    protected ?DateTime $updatedAt;
    
    public function __construct(?int $id = null, string $name, string $description = null, bool $isActive, ?DateTime $createdAt = null, ?DateTime $updatedAt = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->isActive = $isActive;
        $this->createdAt = $createdAt ?? new DateTime();
        $this->updatedAt = $updatedAt ?? new DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }
    
    public function isActive(): bool
    {
        return $this->isActive;
    }

    public function getCreatedAt(): ?DateTime
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): ?DateTime
    {
        return $this->updatedAt;
    }
    
}