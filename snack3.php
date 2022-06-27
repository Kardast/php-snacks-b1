<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_snack3.css">
    <title>Document</title>
</head>
<body><?php

    $arr_length = count($posts);
    $keys = array_keys($posts);

    for ($_i=0; $_i < $arr_length ; $_i++) { 

        $post = $posts[$keys[$_i]];
        echo "<div> {$keys[$_i]} </div>";

        for ($_j=0; $_j < count($post); $_j++) { 
            $page = $post[$_j];
            echo "<span> {$page['title']} <br> {$page['author']} <br> {$page['text']} </span>";
        }
    }
    ?>
</body>
</html>