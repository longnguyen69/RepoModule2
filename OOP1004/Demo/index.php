<?php
include 'person.php';
include 'students.php';
$emp = new students('Nam','25','HN','C200220');
echo $emp->getInfo();