<!-- PHP -->
<?php
/*
# Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
*/

$array = [];

while (count($array) < 15) {

    $randomNumber = rand(1 ,15);

    if ( in_array($randomNumber, $array) == false) {
            
        array_push($array, $randomNumber);

    } 

}

var_dump($array);

?>
<!-- /PHP -->

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack3</title>
    </head>
    <body>
        
    </body>
</html>
<!-- /HTML -->