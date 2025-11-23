<?php

namespace App;

class Inventory
{
    private int $maxCapacity;
    /**@var Item[] */
    private array $items;

    public function __construct($maxCapacity = 20)
    {
        $this->SetmaxCapacity($maxCapacity);
        $this->setItems();
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

    public function getItems(): array
    {
        return $this->items;
    }

    public function setItems(): void
    {
        $this->items = [];
        return;
    }

    public function addItem(Item $item): bool
    {
        if ($item->getSize() <= $this->freeCapacit()) {
            $this->items[] = $item;
            return true;
        }
        return false;
    }

    public function removeItem(string $name): bool
    {

        $name = mb_strtolower($name);

        foreach ($this->items as $index => $item) {
            if (mb_strtolower($item->getName()) == $name) {
                array_splice($this->items, $index, 1);
                return true;
            }
        }
        return false;
    }

    public function freeCapacit(): int
    {
        $occupiedSpace = 0;
        foreach ($this->items as $item) {
            $occupiedSpace += $item->getSize();
        }
        $freeCapacit =  $this->maxCapacity - $occupiedSpace;
        return $freeCapacit;
    }

    public function updateMaxCapacity(int $level): void
    {
    $baseCapacity = 20;
    $bonus = $level * 3;
    $this->setMaxCapacity($baseCapacity + $bonus);
    }

    public function resume(): string
    {

        $response = "";
        $response .= "Capacidade do Inventário: {$this->getMaxCapacity()}<br>";
        $response .= "Espaço Disponível no Inventário: {$this->freeCapacit()}<br>";

        foreach ($this->items as $index => $item) {
            $response .= sprintf("Item #%d ", $index + 1);
            $response .= $item->resume();
        }
        return $response;
    }
}
