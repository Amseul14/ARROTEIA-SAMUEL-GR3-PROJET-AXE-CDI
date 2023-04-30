<?php
    require "connect.php";

    $query = $database->prepare("SELECT * FROM tweetliste ORDER BY date DESC");
    $query->execute();
    $tweets = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Index</title>
    </head>
    <body>
        <button class="logoButton" onclick="openSidenav()"><img src="images/logo.png" alt="logo.png"></button>
        <header id="sideNav"class="sideNav">
            <ul>
                <li><button onclick="closeSidenav()" type="button" class="btn-close" aria-label="Close"></button></li>
                <li>Contenu</li>
                <li><button class="openPopup" onclick="openPopup()">Commentaire</button></li>
                <li class="search">
                    <form action="find.php" method="POST">
                        <input type="text" name="search" placeholder="Mot-clés">
                        <button type="submit">Chercher</button>
                    </form>
                </li>
            </ul>
        </header>

        <div id="favDialog" class="dialogDiv" >
            <form action="tags.php" method="POST">
                <img class="cancel"src="images/cross.png" alt="annuler" onclick="closePopup()" />
                <input type="text" name="tweet" placeholder="Commentaire">
                <select class="tweet-tag" name="tag">
                    <option value="Choisir un tag">Choisir un tag</option>
                    <option value="#Art">#Voyage</option>
                    <option value="#Voyage">#Cinéma</option>
                    <option value="#Musique">#Musique</option>
                    <option value="#Cinéma">#Art</option>
                    <option value="#JeuxVidéo">#JeuxVidéos</option>
                    <option value="#Actualités">#Actualités</option>
                    <option value="#Vie">#Vie</option>
                    <option value="#MeToo">#MeToo</option>
                </select>
                <button type="submit" onclick="closePopup()">Envoyer</button>
            </form>
        </div>
        <!------TWEETS---->
        <div class="tweet">
            <h2>Tweets</h2>
                <?php
                foreach($tweets as $tweet) {?>
                    <div class = "tweet-div">
                        <p class='tweet-text'><?php echo $tweet['contenu'] ;?></p>
                        <p class='tweet-tag'><?php echo $tweet['tags'] ;?></p>
                        <p class='tweet-date'>Crée le <?php echo $tweet['date'] ;?></p>
                        <button onclick="showDelete()" class="tweet-img"><img src="./images/trash-can.png"></button>
                        <div id="popupDelete" style="display: none;">
                            <h2>Voulez vous vraiment supprimer ce message ?</h2>
                            <button onclick="hideDelete()">Annuler</button>
                            <form class="popupSuppr"action="delete.php" method="POST">
                                <input type="hidden" name='supprimer' value="<?php echo $tweet['id']; ?>">
                                <button type="submit">Supprimer</button>
                            </form>
                        </div>
                    </div>
                <?php }?>
        </div>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="JS/popup.js"></script>
    </body>
</html>
    <!-- Supprimer les posts -->
