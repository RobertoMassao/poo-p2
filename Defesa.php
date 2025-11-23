<?php

namespace App;

class Defesa extends Item
{
    public function __construct(string $name, string $class, int $size = 5)
    {
        parent::__construct($name, $class, $size);
    }
}
