<?php


function rssJournal ($urlJournal)
{
    $url = $urlJournal;
    $rss = simplexml_load_file($url);
    foreach ($rss->channel->item as $item) {
        $datetime = date_create($item->pubDate);
        $date = date_format($datetime, 'd M Y, H\hi');
        echo "<div class=\"col-sm-5\">
                    <div class='card'>
                        <div class='card-block'>
                            <h3 class='card-title'>". ($item->title). "</h3>
                            <p class='card-text'>". ($item->description) ."</p>
                            ". $date ."
                            <a href='. $item->link .' class='btn btn-primary'>site de l'article</a>
                        </div>
                    </div>
                </div>";
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
        $i++;

        echo "
            <div class=\"col-sm-3\">
                <div class='card card-block h-100 justify-content-center'>
                    <div class='card-block'>
                        <h5 class='card-title'>".($item->title). "</h5>
                        <a href='$item->link' class='btn btn-primary'>Consultez l'article</a>
                        ". $date ."
                    </div>
                </div>
            </div>
            ";


    }
}

