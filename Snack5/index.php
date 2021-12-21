<?php

$paragraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, assumenda impedit eius reprehenderit dignissimos quasi ut sapiente eum consequatur molestiae maiores officia labore, minus adipisci sint beatae optio dicta inventore, explicabo dolores rerum tenetur. Magnam cupiditate esse distinctio dolores quos consequatur illo dolorem quo vitae. Dicta quidem, minus laborum accusantium illo ipsum explicabo iusto quisquam sint nulla commodi facere corrupti repudiandae, reiciendis error consequatur possimus veniam doloremque blanditiis? Debitis laborum eligendi corporis quos nam corrupti ut voluptates recusandae, explicabo tenetur ex odio in rerum, quis animi quam sit repellendus voluptatibus voluptatem ipsa ullam illum voluptas doloribus! Quo eligendi distinctio dolores voluptatum. Accusantium aperiam voluptate pariatur temporibus vel dolor voluptates animi eveniet odit tenetur sapiente velit corporis, iusto eius, cupiditate aspernatur fugit facilis consequuntur labore blanditiis ratione quis mollitia vero iure? Laudantium ex, fugiat minima enim aspernatur voluptatem rerum quia non impedit error deleniti officia aliquid modi accusamus laborum dicta inventore unde vero iusto eum at neque? Non atque dolorum tenetur debitis aut maiores cumque veritatis ab, delectus quisquam distinctio, dolor totam nemo nulla aliquid asperiores unde aspernatur necessitatibus. Officia voluptate in molestiae. Distinctio voluptatibus libero doloremque mollitia consequatur ullam, aspernatur ratione earum modi amet suscipit, repudiandae odio totam ipsam laborum.";

$paragraphSplit = explode('.', $paragraph, -1);
var_dump($paragraphSplit);

/*
echo "<h1>Paragrafo originale:</h1> <h2>{$paragraph}</h2> <hr>";

echo "<h1>Paragrafi singoli:</h1>";
for($i = 0; $i < count($paragraphSplit); $i++) {
    echo "<h3>{$paragraphSplit[$i]}</h3>";
}
*/

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack5</title>
</head>
<body>
    <h1>Paragrafo</h1>
    <p><?php echo $paragraph ?></p>
    <ul>
        <?php foreach($paragraphSplit as $singleParagraph) {
            if (!empty($singleParagraph)) {
                echo "<li> $singelParagraph. </li>";
            }
        } ?> 
    </ul> 
</body>
</html>