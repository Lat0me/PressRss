<?php

function rssArticle ($urlJournal)
{
    $url = $urlJournal;
    $rss = simplexml_load_file($url);
    $i = 0;
    foreach ($rss->channel->item as $item) {
        $datetime = date_create($item->pubDate);
        $date = date_format($datetime, 'd M Y, H\hi');
        $title = $item->title;
        $link = $item->link;
        $id = rand();
        $i++;
        afficherArticle($title, $link, $date, $id);
    }
}

function afficherArticle($title, $link, $date, $id){
    echo "
            <div class=\"col-sm-3\">
                <div class='card card-block h-100 justify-content-center'>
                    <div class='card-block'>
                        <h5 class='card-title'>". $title . "</h5>
                        <a href='$link' class='btn btn-primary'>Consultez l'article</a><br>
                        ". $date . "<br>
                        
                    </div>
                </div>
            </div>";
}

function saveArticle ($urlJournal, $id, $db_connection)
{
    $url = $urlJournal;
    $rss = simplexml_load_file($url);
    $i = 0;
    foreach ($rss->channel->item as $item) {
        $datetime = date_create($item->pubDate);
        $date = date_format($datetime, 'd M Y, H');
        $title = $item->title;
        $link = $item->link;
        $description = $item->description;
        $desc = mysqli_real_escape_string($db_connection, $description);
        $titre = mysqli_real_escape_string($db_connection, $title);
        $i++;

        $requete = "INSERT INTO article VALUES (NULL, '" . $id . "', '" . $link . "', '" . $titre . "', '" . $desc . "', '"  . $date .  "');";
        // execution de la requte avec des résultats
        $req = mysqli_query($db_connection, $requete);//or die('Erreur SQL !<br />' . $requete . '<br />' . mysqli_error($db_connection));

    }
}