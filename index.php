<!doctype html>
<?php
require_once "function/fluxRss/rss.php";
?>

<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Home - Press.fr</title>
    <link rel="shortcut icon" type="image/x-icon" href=""/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
            integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
            integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
            integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
            crossorigin="anonymous"></script>
</head>
<body>
<!--Header -->
<div class="card text-center">
    <div class="card-block">
        <h4 class="card-title">Press.fr</h4>
        <p class="card-text">Lisez vos articles ou vous voulez</p>
        <a href="#continuer" class="btn btn-primary">Continuez</a>
    </div>

</div>

<!--Choix du Thèmes -->
<div id="continuer"></div>
<ul class="nav nav-tabs justify-content-center" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#Technologie" role="tab">Technologie</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#Science" role="tab">Science</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#Sport" role="tab">Sport</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#Presse" role="tab">Presse</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#cité" role="tab">Cité</a>
    </li>
</ul>
<br>

<!--Choix du journal -->
<div class="tab-content">
    <!-- Technologie -->
    <div class="tab-pane active" id="Technologie" role="tabpanel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    <div class="card card-block h-100 justify-content-center">
                        <div class="card-block">
                            <center>
                            <h3 class="card-title">20minutes</h3>

                                <img src="image/20minute/20minute.jpg" alt="Smiley face" height="50" width="50">
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card card-block h-100 justify-content-center">
                        <div class="card-block">
                            <center>
                            <h3 class="card-title">ça m'intersse</h3>
                            <img src="image/caminteresse/ca.jpg" alt="Smiley face" height="50" width="50">
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card card-block h-100 justify-content-center">
                        <div class="card-block">
                            <center>
                                <h3 class="card-title">01net.com</h3>
                                <img src="image/01net/01net.png" alt="Smiley face" height="50" width="50">
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card card-block h-100 justify-content-center">
                        <div class="card-block">
                            <center>
                                <h3 class="card-title">Hitek</h3>
                                <img src="image/hitek/hitek.jpg" alt="Smiley face" height="50" width="50">
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Science -->
    <div class="tab-pane" id="Science" role="tabpanel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-block">
                            <h3 class="card-title">Special title treatment</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-block">
                            <h3 class="card-title">Special title treatment</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-block">
                            <h3 class="card-title">Special title treatment</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-block">
                            <h3 class="card-title">Special title treatment</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sport -->
    <div class="tab-pane" id="Sport" role="tabpanel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-block">
                            <h3 class="card-title">Special title treatment</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-block">
                            <h3 class="card-title">Special title treatment</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-block">
                            <h3 class="card-title">Special title treatment</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-block">
                            <h3 class="card-title">Special title treatment</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Presse -->
    <div class="tab-pane" id="Presse" role="tabpanel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-block">
                            <h3 class="card-title">Special title treatment</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-block">
                            <h3 class="card-title">Special title treatment</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-block">
                            <h3 class="card-title">Special title treatment</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-block">
                            <h3 class="card-title">Special title treatment</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cité -->
    <div class="tab-pane" id="cité" role="tabpanel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-block">
                            <h3 class="card-title">Special title treatment</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-block">
                            <h3 class="card-title">Special title treatment</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-block">
                            <h3 class="card-title">Special title treatment</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-block">
                            <h3 class="card-title">Special title treatment</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

<!-- Menu -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-1">
            <nav class="nav flex-column">
                <a class="nav-link active" href="#">Active</a>
                <a class="nav-link" href="#">Link</a>
                <a class="nav-link" href="#">Link</a>
                <a class="nav-link disabled" href="#">Disabled</a>
            </nav>
        </div>
        <div class="col-sm-11">
            <div class="card">
                <div class="card-block">
                    <div class="container-fluid">
                        <div class="row">
                            <?php
                            $urlJournal = "http://hitek.fr/rss";
                            rssArticle($urlJournal); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
