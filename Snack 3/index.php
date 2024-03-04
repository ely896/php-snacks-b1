<?php 
/* Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e 
come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
*/

$postsByDate = [

    '09/07/2023' => [
        [
            'title' => 'Cats and their butlers',
            'author' => 'Sara Flower ',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero voluptatibus praesentium blanditiis cumque esse. Dolores sapiente quis natus nulla error libero ex, architecto at id eligendi quas, sequi, nostrum vero.'
        ],
        [
            'title' => 'Cat Lovers',
            'author' => 'Davide Bear ',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero voluptatibus praesentium blanditiis cumque esse. Dolores sapiente quis natus nulla error libero ex, architecto at id eligendi quas, sequi, nostrum vero.'
        ],
    ],

    '10/02/2024' => [
        [
            'title' => 'The red cat',
            'author' => 'Enrico Wolfe',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero voluptatibus praesentium blanditiis cumque esse. Dolores sapiente quis natus nulla error libero ex, architecto at id eligendi quas, sequi, nostrum vero.'
        ]
    ],

    '15/02/2024' => [
        [
            'title' => 'Cats and dogs',
            'author' => 'Stella Lux',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero voluptatibus praesentium blanditiis cumque esse. Dolores sapiente quis natus nulla error libero ex, architecto at id eligendi quas, sequi, nostrum vero.'
        ],
        [
            'title' => 'Friendship between animals',
            'author' => 'Gioia Bird',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero voluptatibus praesentium blanditiis cumque esse. Dolores sapiente quis natus nulla error libero ex, architecto at id eligendi quas, sequi, nostrum vero.'
        ],
        [
            'title' => 'Live with an animal',
            'author' => 'Sandra Dog',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero voluptatibus praesentium blanditiis cumque esse. Dolores sapiente quis natus nulla error libero ex, architecto at id eligendi quas, sequi, nostrum vero.'
        ]
    ],
];
/*
foreach ($postsByDate as $data => $posts) {
    echo "Data: $data";
    foreach ($posts as $post) {
        echo "Titolo: " . $post['title'];
        echo "Author: " . $post['author'];
        echo "text: " . $post['text'];
    }
}
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>
<body>
<?php foreach ($postsByDate as $data => $posts) {
    echo "Data: $data";
    foreach ($posts as $post) { ?>

    <div>
        <h1><?php echo $post['title'] ?></h1>
        <p><?php echo $post['text'] ?></p>
        <h5><?php echo $post['author'] ?></h5>
        
    </div>
   
<?php  }
}
?>
</body>
</html>