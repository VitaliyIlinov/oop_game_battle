<?php
use Classes\People;
use Classes\Battle;
define('CD', __DIR__.DIRECTORY_SEPARATOR);
spl_autoload_extensions('.php');
set_include_path(CD.'Interfaces');
set_include_path(CD.'Classes');
spl_autoload_register();

$people= new People('Vasya',300);
$people1= new People('Petya',250);
$people2= new People('Masha',190);
$people3= new People('Dima',390);
$battle= new Battle();
$battle->listPeople($people);
$battle->listPeople($people1);
$battle->listPeople($people2);
$battle->listPeople($people3);
$battle->selected();
//var_dump($battle);
