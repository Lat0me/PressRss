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
$urlJournal = "http://www.sciencepresse.qc.ca/rss.xml";
rssArticle($urlJournal);
require_once "database/database.php";
$id = 9;
saveArticle ($urlJournal, $id, $db_connection);