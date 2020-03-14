<?php


require 'src/Unit.php';
require 'src/Soldier.php';
require 'src/Archer.php';


$miguel = new Archer('Michi');

$unidad1 = new soldier ('Tatto');
$unidad1->move(  'El Norte');

$miguel->attack($miguel);
$miguel->attack($miguel);




