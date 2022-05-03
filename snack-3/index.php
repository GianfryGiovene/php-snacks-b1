<!-- 
    Snack 3
    Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
-->

<?php
    $casualNumbers = [];

    while(count($casualNumbers) < 15){

        $casualNumber = rand(1, 100);

        if(!in_array($casualNumber, $casualNumbers)){
            $casualNumbers[] = $casualNumber;
            echo $casualNumber. ' ';
        }
    }
    echo '<br>';
    var_dump($casualNumbers);
?>