<?php 
/*Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta*/

$randomNumbers = [];

while (count($randomNumbers) < 15) {
    $number = rand(0, 100);
    if (!in_array($number, $randomNumbers)) {
        $randomNumbers[] = $number;
    }
}
/*
foreach ($randomNumbers as $number) {
    echo $number . "<br />";
}
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>


    <?php foreach ($randomNumbers as $number) { ?>

<h3><?php echo $number . "<br />"; ?></h3>

<?php } 
?>
</head>
<body>
    
</body>
</html>