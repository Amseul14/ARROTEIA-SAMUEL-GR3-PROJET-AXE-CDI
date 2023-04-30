<?php
    require "connect.php";

    $requete = $database->prepare("INSERT INTO tweetliste(contenu, tags) VALUES (:formTweet, :formTag)");
    $requete->execute(
        [
            "formTweet" => $_POST["tweet"],
            "formTag" => $_POST["tag"]
        ]
    );
    header("Location: index.php");

?>