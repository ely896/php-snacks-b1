<?php
//Creare un array contenente qualche alunno di un’ipotetica classe. 
//Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
//Stampare Nome, Cognome e la media dei voti di ogni alunno.

$alunni = [
    [
        'nome' => 'Leonardo',
        'cognome' => 'Mela',
        'voti' => [6, 7, 8, 5, 9]
    ],
    [
        'nome' => 'Francesco',
        'cognome' => 'Arancio',
        'voti' => [8, 9, 6, 7, 8]
    ],
    [
        'nome' => 'Edoardo',
        'cognome' => 'Prugna',
        'voti' => [10, 9, 8, 7, 9]
    ]
];




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 7</title>
</head>
<body>
    <?php
foreach ($alunni as $alunno) {
    $mediaVoti = array_sum($alunno['voti']) / count($alunno['voti']);
    echo "Nome: " . $alunno['nome'] . ", Cognome: " . $alunno['cognome'] . ", Media voti: " . number_format($mediaVoti) . "<br>";
}
?>
</body>
</html>