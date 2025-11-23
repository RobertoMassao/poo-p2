<?php

namespace App;

class Player
{
    //** @var Invenary */
    private string $nickname;
    private int $level;
    private Inventory $inventory;

    public function __construct(string $nickname, int $level = 1)
    {
        $this->setNickname($nickname);
        $this->setLevel($level);
        $this->setInventory();
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

    public function setInventory(): void
    {
        $this->inventory = new Inventory();
    }

    public function addItem(Item $item): string
    {
        $inventory = $this->getInventory();
        if ($inventory->addItem($item)) {
            return "Item: {$item->getName()} - Adcionado ao Inventário<br>";
        }

        return "Item: {$item->getName()} Não adicionado.<br>Inventário Cheio<br>";
    }

    public function removeItem(string $name): string
    {
        $inventory = $this->getInventory();
        if ($inventory->removeItem($name)) {
            return "Removido com Sucesso<br>";
        }
        return "Item não encontrado<br>";
    }

    public function upgradeLevel(): void
    {
        $newLevel = $this->getLevel() + 1;
        $this->setLevel($newLevel);
        $inventory = $this->getInventory();
        $inventory->UpdateMaxCapacity($newLevel);
    }

    public function resume(): string
    {
        $inventory = $this->inventory;
        $response = "<br>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX<br>";
        $response .= "<ul>Atributos do Jogador: 
                    <li><strong>Nome:</strong> {$this->getNickname()}</li>
                    <li>Nível: {$this->getLevel()}</li>
                    <li>Tamanho da Mochila: {$inventory->getMaxCapacity()}
                    </ul>
                    {$inventory->resume()}";

        return $response;
    }
}
