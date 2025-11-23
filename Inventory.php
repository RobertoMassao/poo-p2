<?php

namespace App;

class Inventory
{
    private int $maxCapacity;
    /**@var Item[] */
    private array $itens;

    public function __construct($maxCapacity = 20)
    {
        $this->SetmaxCapacity($maxCapacity);
        $this->setItens();
    }

    public function getMaxCapacity(): int
    {
        return $this->maxCapacity;
    }

    public function setMaxCapacity($maxCapacity): void
    {
        $this->maxCapacity = $maxCapacity;
        return;
    }

    public function getItens(): array
    {
        return $this->itens;
    }

    public function setItens(): void
    {
        $this->itens = [];
        return;
    }

    public function addItem(Item $item): bool
    {
        if ($item->getSize() <= $this->freeCapacit()) {
            $this->itens[] = $item;
            return true;
        }
        return false;
    }

    public function removeItem(Item $item): bool
    {
        $name = $item->getName();
        $name = mb_strtolower($name);

        foreach ($this->itens as $index => $item) {
            if (mb_strtolower($item->getName()) == $name) {
                array_splice($this->itens, $index, 1);
                return true;
            }
        }
        return false;
    }

    public function freeCapacit(): int
    {
        $occupiedSpace = 0;
        foreach ($this->itens as $item) {
            $occupiedSpace += $item->getSize();
        }
        $freeCapacit =  $this->maxCapacity - $occupiedSpace;
        return $freeCapacit;
    }

    public function updateMaxCapacity($level)
    {
        $currentCapacity = $this->getMaxCapacity();
        $newCapacity = $currentCapacity + ($level * 3);
        $this->setMaxCapacity($newCapacity);
    }
}
