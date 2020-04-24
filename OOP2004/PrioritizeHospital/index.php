<?php
include "Patient.php";


function callPrioritize()
{
    $patient1 = new Patient("nam", 3);
    $patient2 = new Patient("long", 2);
    $patient4 = new Patient("duc", 5);
    $patient5 = new Patient("nga", 6);
    $patient3 = new Patient("dung", 1);

    $queuePatient = new SplQueue();

    $queuePatient->enqueue($patient1);
    $queuePatient->enqueue($patient2);
    $queuePatient->enqueue($patient3);
    $queuePatient->enqueue($patient4);
    $queuePatient->enqueue($patient5);

    $temp = $queuePatient->count();

    $arr = [];
    for ($i = 0; $i < $temp; $i++) {
        array_push($arr, $queuePatient->dequeue());
    }
    var_dump($arr);
//    asort($arr);
//    foreach ($arr as $items) {
//        echo "patients are examined: " . $items->code . "</br>";
//        echo "next patient: " . ($items->code + 1) . "</br>";
//    }
//    var_dump($arr);
}

callPrioritize();
