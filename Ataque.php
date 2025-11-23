<?php

namespace App;

class Ataque extends Item
{
    public function __construct(string $name, string $class, int $size = 7)
    {
        parent::__construct($name, $class, $size);
    }
}
