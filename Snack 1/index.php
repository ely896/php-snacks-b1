<?php /* Creiamo un array contenente le partite di basket di un ipotetica tappa del calendario. 
    Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
    Stampiamo a schermo tutte le partite con questo schema:
    Olimpia Milano - Cantù | 55-60*/?>
<?php


$matches = [
    ["home" => "Olimpia Milano", "guest" => "Cantù", "home_score" => rand (1, 100), "guest_score" => rand (1, 100)],
    ["home" => "Virtus Bologna", "guest" => "Fortitudo Bologna", "home_score" => rand (1, 100), "guest_score" => rand (1, 100)],
    ["home" => "Napoli", "guest" => "Universo Treviso", "home_score" => rand (1, 100), "guest_score" => rand (1, 100)],
    
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    

<?php foreach ($matches as $matche) { ?>

    <p>
    <span> <?php echo $matche['home'] ?></span> |
    <span> <?php echo $matche['guest'] ?></span> :
    <span> <?php echo $matche['home_score'] ?></span> -
    <span> <?php echo $matche['guest_score'] ?></span>

    </p>

<?php }

?>

    
</body>
</html>