<?php

namespace App;

class Magia extends Item
{
    public function __construct(string $name, string $class, int $size = 2)
    {
        parent::__construct($name, $class, $size);
    }
}
