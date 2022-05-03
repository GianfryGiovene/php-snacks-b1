<!-- 
    Snack 1
    Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, 
    punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60
-->

<?php 
    $matches = [
        [
            'home'=> 'Sardine',
            'guest' => 'Palombari',
            'homeScore' => 12,
            'guestScore' => 22
        ],
        [
            'home'=> 'Pepe',
            'guest' => 'Sale',
            'homeScore' => 22,
            'guestScore' => 34
        ],
        [
            'home'=> 'Ketchup',
            'guest' => 'Maionese',
            'homeScore' => 1,
            'guestScore' => 55
        ]
    ];

    for($i = 0; $i < count($matches); $i++){
        $match = $matches[$i];
        echo ("<p> {$match["home"]} -  {$match["guest"]} | {$match["homeScore"]}-{$match["guestScore"]}</p>");
    }
?>