<?php
echo "<div class=\"col-sm-12\">
    <div class=\"card card-block h-100 justify-content-center\">
        <div class=\"card-block\">
            <center>
                <h3 class=\"card-title\">01net.com</h3>
                <img src=\"image/01net/01net.png\" alt=\"Smiley face\" height=\"50\" width=\"50\">
            </center>
        </div>
    </div>
</div>";
$urlJournal = "http://www.01net.com/rss/actualites/culture-medias/";
$id = 1;
dataArticle($id, $db_connection, $id_utilisateur);
saveArticle ($urlJournal, $id, $db_connection);

?>
