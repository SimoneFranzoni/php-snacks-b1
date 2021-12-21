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

print_r(array_keys($posts));

$data = (array_keys($posts));

var_dump($posts);
var_dump($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>
<body>
    
    <?php

    for($i=0; $i<count($post[$data[$j]]); $i++);{

        for($i=0; $i<count($post[$data[$i]]); $i++){

            echo $data[$j];
            echo ". ";
            echo $posts[$data[$j]][$i]["title"];
            echo ": ";
            echo $posts[$data[$j]][$i]["author"];
            echo ". ";
            echo " - ";
            echo $posts[$data[$j]][$i]["text"];
            echo "<br>";

        }
    }
    
    ?>

    <div>
        <?php foreach($post as $key => $post){?>
            <h2><?php echo $key?></h2>
            <ul>
                <li>
                    <div class=""></div>
                </li>
            </ul>
        <?php }?>
    </div>

</body>
</html>
    
