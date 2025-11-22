<?php

namespace App;

class Player
{
    //** @var Invenary */
    private string $nickname;
    private int $level;
    private Inventory $inventory;

    public function __construct(string $nickname, int $level, Inventory $inventory)
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
        $this->level = 1;
    }

    public function getInventory(): Inventory
    {
        return $this->inventory;
    }

    public function setInventory(Inventory $inventory): void
    {
        $this->inventory = $inventory;
    }
}
