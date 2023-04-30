<?php

    require "connect.php";

    $data = [
        'suppForm' => $_POST['supprimer']
    ];

    $supp = $database->prepare('DELETE FROM tweetliste WHERE id = :suppForm');
    $supp->execute($data);

    header('Location: index.php')

?>