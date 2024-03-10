<?php
//Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 6</title>
</head>
<style>
        .rectangle {
            padding: 20px;
            margin-bottom: 20px;
        }
        .teachers {
            background-color: grey;
        }
        .pm {
            background-color: green;
        }
    </style>
<body>


    <div class="rectangle teachers">
        <h2>Teachers</h2>
        <?php foreach ($db['teachers'] as $teacher) { ?>
            <p><?php echo $teacher['name'] . " " . $teacher['lastname']; ?></p>
        <?php } ?>
    </div>

    <div class="rectangle pm">
        <h2>PM</h2>
        <?php foreach ($db['pm'] as $pm) { ?>
            <p><?php echo $pm['name'] . " " . $pm['lastname']; ?></p>
        <?php } ?>
    </div>
</body>
</html>