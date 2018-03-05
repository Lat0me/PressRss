<div class="col-sm-12">
    <div class="card card-block h-100 justify-content-center">
        <div class="card-block">
            <center>
                <h3 class="card-title">Air et Cosmos</h3>

                <img src="image/aircosmos/aircosmos.png" alt="Smiley face" height="50" width="50">
            </center>
        </div>
    </div>
</div>
<?
$id_utilisateur = $_SESSION['id'];
$urlJournal = "http://www.air-cosmos.com/rss/air-cosmos.xml";
$id = 3;
dataArticle($id, $db_connection, $id_utilisateur);
saveArticle ($urlJournal, $id, $db_connection);
