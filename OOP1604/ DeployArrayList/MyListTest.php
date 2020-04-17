<?php
include "MyList.php";

$elements = new MyList();

$elements->addElement("a");
$elements->addElement("b");
$elements->addElement("c");
$elements->addElement("d");
$elements->addElement("e");
$elements->addElement("f");
$elements->addElement("g");
$elements->addElement("h");

$elements->getArrayList();
var_dump($elements->sizeArrayList());
var_dump($elements->getElement(4));
var_dump($elements->editElement('two', 2));
var_dump($elements->insertElement('abc',4));
$elements->getArrayList();

var_dump($elements->removeElement(5));
$elements->getArrayList();

