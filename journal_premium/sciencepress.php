<div class="col-sm-12">
    <div class="card card-block h-100 justify-content-center">
        <div class="card-block">
            <center>
                <h3 class="card-title">Science-Presse</h3>

                <img src="image/asp/asp.png" alt="Smiley face" height="50" width="50">
            </center>
        </div>
    </div>
</div>
<?php
$id_utilisateur = $_SESSION['id'];
$urlJournal = "http://www.sciencepresse.qc.ca/rss.xml";
$id = 9;
dataArticle($id, $db_connection, $id_utilisateur);
saveArticle ($urlJournal, $id, $db_connection);
