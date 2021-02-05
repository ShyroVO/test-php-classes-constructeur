<?php
require './classes/Computer.php';

$computerOne = new Computer('Nul','truc','1Go');
$computerOne->start();
$computerOne->sleep();

$computerTwo = new Computer('Degueu', 'autretruc', 'Intruc');
$computerTwo->start();
$computerTwo->sleep();