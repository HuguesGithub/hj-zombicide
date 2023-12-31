<?php
namespace src\Entity\Traits;

trait IdTrait
{
    protected int $id;
    
    public function getId(): int
    {
        return $this->id;
    }
}
