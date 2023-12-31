<?php
namespace src\Entity;

use src\Entity\Traits;
use src\Repository\MissionRepository;

class Mission extends Entity
{
    use IdTrait;

    //////////////////////////////////////////////////
    // ATTRIBUTES
    //////////////////////////////////////////////////
    private string $title;

    //////////////////////////////////////////////////
    // GETTERS & SETTERS
    //////////////////////////////////////////////////
    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    //////////////////////////////////////////////////
    // CONSTRUCT
    //////////////////////////////////////////////////
    public function __contruct(array $attributes=[])
    {
        parent::__contruct($attributes);
        $this->initRepository([MissionRepository::class]);
    }
}
