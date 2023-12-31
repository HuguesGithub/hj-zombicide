<?php
namespace src\Entity;

class Entity
{
    public function __construct(array $attributes=[])
    {
        if (!empty($attributes)) {
            foreach ($attributes as $key=>$value) {
                $this->{$key} = $value;
            }
        }
    }

    public function initRepository($repositories=[])
    {
        while (!empty($repositories)) {
            $repository = array_shift($repositories);
            $this->{$repository} = new $repository;
        }
    }
}
