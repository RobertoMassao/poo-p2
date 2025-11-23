<?php

namespace App;

class Item
{
    protected string $name;
    protected int $size;
    protected string $class;


    public function __construct(string $name, string $class, int $size)
    {
        $this->setName($name);
        $this->setClass($class);
        $this->setSize($size);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {

        $this->name = $name;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function setSize(int $size): void
    {

        $this->size = $size;
    }

    public function getClass(): string
    {
        return $this->class;
    }

    public function setClass($class): void
    {
        $this->class = $class;
    }

    public function resume(): string
    {
        return "{$this->name} - Classe: {$this->class} - Tamanho {$this->size}<br>";
    }
}
