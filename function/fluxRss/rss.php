<?php


function afficherArticle($title, $link, $date, $id){
    echo "
            <div class=\"col-sm-3\">
                <div class='card card-block h-100 justify-content-center'>
                    <div class='card-block'>
                        <h5 class='card-title'>". $title . "</h5>
                        <form method=\"post\">
                        <a href='$link' class='btn btn-primary'>Consultez l'article</a>
                        <button name='$id' class=\"btn btn-success\">
                                <i class=\"fa fa-floppy-o\" aria-hidden=\"true\"></i>
                            </button><br>
                        ". $date ."
                        </form>
                    </div>
                </div>
            </div>
            ";
    if(isset($_POST[$id])){
        echo $id;
    }
}

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

function parseMysql ($title, $link) {
    $titleSql = mysqli_real_escape_string($title);
    $linkSql = mysqli_real_escape_string($link);

}


function saveArticle (){
    echo "<button type=\"button\" class=\"btn btn-primary\"><i class=\"fa fa-floppy-o\" aria-hidden=\"true\"></i></button>";
}

