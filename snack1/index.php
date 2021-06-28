<!-- PHP -->
<?php
/*
# Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
*/

$games = [
    [
        'homeTeam' => 'Boston Celtics',
        'awayTeam' => 'Brooklyn Nets',
        'homeTeamScore' => 100,
        'awayTeamScore' => 90,
    ],
    [
        'homeTeam' => 'New York Knicks',
        'awayTeam' => 'Philadelphia 76ers',
        'homeTeamScore' => 105,
        'awayTeamScore' => 110,
    ],
    [
        'homeTeam' => 'Toronto Raptors',
        'awayTeam' => 'Chicago Bulls',
        'homeTeamScore' => 89,
        'awayTeamScore' => 99,
    ],
];

// var_dump($games)

?>
<!-- /PHP -->

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack1</title>
    </head>
    <body>
        <!-- PHP -->
        <?php
            for ($i = 0; $i < count($games); $i++) {

                echo "<strong>"."Game" . ($i+1). "</strong>";

                echo "<br>";

                echo $games[$i]["homeTeam"]." - ".$games[$i]["awayTeam"]." | ".$games[$i]["homeTeamScore"]." - ".$games[$i]["awayTeamScore"];

                echo "<br>";
                
                echo "<hr>";

            };
        ?>
        <!-- /PHP -->
    </body>
</html>
<!-- /HTML -->