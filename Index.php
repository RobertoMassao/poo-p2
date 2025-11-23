<?php

require_once "Item.php";
require_once "Ataque.php";
require_once "Defesa.php";
require_once "Magia.php";
require_once "Inventory.php";
require_once "Player.php";

use App\Ataque;
use App\Defesa;
use App\Magia;
use App\Player;

// Criando Items

$attackItem1 = new Ataque("Espada Longa", "Guerreiro");
$attackItem2 = new Ataque("Espada Curta", "Assassino");
$attackItem3 = new Ataque("Lança", "Cavaleiro");
$deffensiveItem1 = new Defesa("Escudo Pequeno", "Guarda de Castelo");
$deffensiveItem2 = new Defesa("Escudo Grande", "Escudo de Batalha");
$magicItem1 = new Magia("Varinha", "Natureza");
$magicItem2 = new Magia("Capa Mágica", "Invisibilidade");
$magicItem3 = new Magia("Cajado", "natureza");

// Criando um players

$player1 = new Player("Rafael");
$player2 = new Player("Roberto");

// Testando

echo $player1->getNickname();
echo "<br>-----------------------------------<br>";
echo $player1->getLevel();
echo "<br>-----------------------------------<br>";


$mochila = $player1->getInventory();
$mochila->getMaxCapacity();

echo $player1->addItem($attackItem1);
echo $player1->addItem($attackItem2);
echo $player1->addItem($attackItem3);

echo "<br>-----------------------------------<br>";
echo "<br>-----------------------------------<br>";

echo $player1->resume();
echo "<br>-----------------------------------<br>";

$player1->upgradeLevel();
$player1->upgradeLevel();
$player1->upgradeLevel();
echo "Nível do Jogador: " . $player1->getLevel();

// echo $player1->getLevel();
echo "<br>Tamanho da Mochila " . $mochila->getMaxCapacity();
echo "<br>";

echo $player1->addItem($deffensiveItem1);
echo $player1->addItem($magicItem2);
echo $player1->addItem($attackItem3);
echo "<br>========================================<br><br>";
echo "Espaço disponível " . $mochila->freeCapacit();

echo "<br>";

echo $player1->removeItem("LANÇA");

echo $player1->resume();

echo $player2->resume();
