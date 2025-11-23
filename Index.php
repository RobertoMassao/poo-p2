<?php

require_once "App\Item.php";

$item1 = new Item('', '');
$item2 = new Item("Escalibur", 3, "Espadas");
echo $item1->resume();
echo $item2->resume();
