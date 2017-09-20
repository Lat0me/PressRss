<div class="col-sm-12">
    <div class="card card-block h-100 justify-content-center">
        <div class="card-block">
            <center>
                <h3 class="card-title">L'équipe</h3>
                <img src="image/lequipe/lequipelogo.png" alt="Smiley face" height="50" width="50">
            </center>
        </div>
    </div>
</div>
<?php
$urlJournal = "https://www.lequipe.fr/rss/actu_rss.xml";
$id = 7;
dataArticle($id, $db_connection, $id_utilisateur);
saveArticle ($urlJournal, $id, $db_connection);
