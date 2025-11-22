<?php

namespace App;

class Player
{
    //** @var Invenary */
    private string $nickname;
    private int $level;
    private Inventory $inventory;

    public function __construct(string $nickname, Inventory $inventory, int $level = 1)
    {
        $this->setNickname($nickname);
        $this->setLevel($level);
        $this->setInventory($inventory);
    }

    public function getNickname(): string
    {
        return $this->nickname;
    }

    public function setNickname(string $nickname): void
    {
        $this->nickname = $nickname;
    }

    public function getLevel(): int
    {
        return $this->level;
    }

    public function setLevel(int $level): void
    {
        $this->level = $level;
    }

    public function getInventory(): Inventory
    {
        return $this->inventory;
    }

    public function setInventory(Inventory $inventory): void
    {
        $this->inventory = $inventory;
    }

    public function addItem(Item $item): string
    {
        $inventory = $this->getInventory();
        if ($inventory->addItem($item)) {
            return "{$item->getName()} Adcionado ao Inventário";
        }
        return "Inventário Cheio";
    }

    public function removeItem(Item $item): string
    {
        $inventory = $this->getInventory();
        if ($inventory->removeItem($item)) {
            return "Removido com Sucesso";
        }
        return "Item não encontrado";
    }

    public function upgradeLevel(): void
    {
        $newLevel = $this->getLevel() + 1;
        $this->setLevel($newLevel);
        $inventory = $this->getInventory();
        $inventory->UpdateMaxCapacity($newLevel);
    }
}
