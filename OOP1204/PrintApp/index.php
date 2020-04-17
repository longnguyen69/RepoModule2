<?php
include "class/Printer.php";
include "class/FilePrinter.php";

$filePath = new FilePrinter("$filePath","data.txt");

$filePath->makePrint("hello");