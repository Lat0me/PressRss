<div class="col-sm-12">
    <div class="card card-block h-100 justify-content-center">
        <div class="card-block">
            <center>
                <h3 class="card-title">CNRS Le journal</h3>

                <img src="image/crns/cnrs-lejournal-140.jpg" alt="Smiley face" height="50" width="50">
            </center>
        </div>
    </div>
</div>
<?php
$urlJournal = "https://lejournal.cnrs.fr/rss";
rssArticle($urlJournal);
require_once "database/database.php";
$id = 4;
saveArticle ($urlJournal, $id, $db_connection);