<div class="col-sm-12">
    <div class="card card-block h-100 justify-content-center">
        <div class="card-block">
            <center>
                <h3 class="card-title">Hitek</h3>
                <img src="image/hitek/hitek.jpg" alt="Smiley face" height="50" width="50">
            </center>
        </div>
    </div>
</div>
<?php
$id_utilisateur = $_SESSION['id'];
$urlJournal = "http://hitek.fr/rss";
$id = 5;
dataArticle($id, $db_connection, $id_utilisateur);
saveArticle ($urlJournal, $id, $db_connection);
