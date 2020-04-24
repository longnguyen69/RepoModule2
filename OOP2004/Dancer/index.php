<?php
include "Dancer.php";

function pairing()
{
    $queueDancerMale = new SplQueue();
    $queueDancerFemale = new SplQueue();
    // male
    $maleDancer0 = new Dancer("Smith", "male");
    $maleDancer1 = new Dancer("Jones", "male");
    $maleDancer2 = new Dancer("Ingram", "male");
    $maleDancer3 = new Dancer("Brown", "male");

    $queueDancerMale->enqueue($maleDancer0);
    $queueDancerMale->enqueue($maleDancer1);
    $queueDancerMale->enqueue($maleDancer2);
    $queueDancerMale->enqueue($maleDancer3);
    // female
    $femaleDancer0 = new Dancer("Ana","female");
    $femaleDancer1 = new Dancer("Almira","female");
    $femaleDancer2 = new Dancer("Meliora","female");
    
    $queueDancerFemale->enqueue($femaleDancer0);
    $queueDancerFemale->enqueue($femaleDancer1);
    $queueDancerFemale->enqueue($femaleDancer2);

    // paring
    $temp = 0;
    if ($queueDancerMale->count() > $queueDancerFemale->count()){
        $temp = $queueDancerFemale->count();
    } else{
        $temp = $queueDancerMale->count();
    }

    for ($i = 0; $i < $temp; $i++){
        echo "Couple " . ($i + 1) . " : " . $queueDancerMale[$i]->name . " and " . $queueDancerFemale[$i]->name . "</br>";
        $queueDancerFemale->dequeue();
        $queueDancerMale->dequeue();
    }
    echo "Male Waiting: " . $queueDancerMale->count();
    echo "Female Waiting: " . $queueDancerMale->count();
}
pairing();

