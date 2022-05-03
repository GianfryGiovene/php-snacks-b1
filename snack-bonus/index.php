<!-- 
    Snack Bonus
    Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, 
    Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
-->
<?php 
    $students = [
        [
            'nome' => 'Pippo',
            'cognome' => 'Pippone',
            'voti' => [10, 8, 3],
        ],
        [
            'nome' => 'Pierpaolo',
            'cognome' => 'Borbone',
            'voti' => [2, 2, 2, 2],
        ],
    ];

    for($i = 0; $i < count($students); $i++){
        $student = $students[$i];
        $averageRating = 0;
        for($j = 0; $j < count($student['voti']); $j++){
            $vote = $student['voti'][$j];
            $averageRating += $vote;
        }
        $averageRating /= count($student['voti']);
        echo ("<p> {$student["nome"]}  {$student["cognome"]} | media voti: {$averageRating}</p>");
    }
?>