<?php
    require "connect.php";

    var_dump($_POST);
    $query = $database->prepare("SELECT * FROM tweetliste WHERE contenu LIKE '%:formSearch%'");
    $query->execute(
        ["formSearch" => $_POST['search']]
    );
    $tweets = $query->fetchAll(PDO::FETCH_ASSOC);
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h2>Tweets</h2>
            <ul>
                <?php
                    foreach($tweets as $tweet) {
                        echo "<li>$tweet[id] - $tweet[contenu], Crée le <b>$tweet[date]</b>.  </li>" ;
                    }
                ?>
            </ul>
    </body>
</html>