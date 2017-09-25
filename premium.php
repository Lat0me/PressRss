<!doctype html>
<?php
require_once "function/article/article.php";
#require_once "function/fluxRss/rss.php";
require_once "function/database/database.php";
require_once "function/connexion/connexion.php";

session_start();
$id_utilisateur = $_SESSION['id'];
if (!isset($_SESSION['pseudo'])) {
    header('location: index.php');
}

?>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Abonné - press.fr</title>
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.png"/>

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
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">

    <!-- function javascript -->
    <script type="text/javascript" src="myjs/myjs.js"></script>

    <!-- My CSS -->
    <link rel="stylesheet" href="mycss/mycss.css">
</head>
<body>
<!--Header -->
<div class="card text-center" id="header">
    <div class="card-block" id="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-8">
                    <h4 class="card-title">press.fr</h4>
                    <a href="#continuer" class="btn btn-primary">Continuez</a>
                </div>
                <div class="col-sm-2">
                </div>
            </div>
        </div>
    </div>
</div>


<!--Choix du Thèmes -->
<div id="continuer"></div>
<ul class="nav nav-tabs justify-content-center" role="tablist" id="navTheme">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#Technologie" id="textColorNavs" role="tab">Technologie</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#Science" id="textColorNavs" role="tab">Science</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#Sport" id="textColorNavs" role="tab">Sport</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#Presse" id="textColorNavs" role="tab">Presse</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#cité" id="textColorNavs" role="tab">Cité</a>
    </li>
    <form class="form-inline" method="POST">
        <input name="mots" class="form-control mr-sm-3" type="text" placeholder="Recherche">
        <button name="recherche" class="btn btn-outline-primary my-2 my-sm-0" type="submit">
            <i class="fa fa-search" aria-hidden="true"></i>
        </button>
    </form>

</ul>
<br>

<!--Choix du journal -->
<div class="tab-content" id="journal">
    <!-- Technologie -->
    <div class="tab-pane active" id="Technologie" role="tabpanel">
        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-3">
                    <a href="premium.php?page=1">
                        <div class="card card-block h-100 justify-content-center">
                            <div class="card-block">
                                <center>
                                    <h3 class="card-title">20minutes</h3>

                                    <img src="image/20minute/20minute.jpg" alt="Smiley face" height="50" width="50">
                                </center>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-3">
                    <a href="premium.php?page=2">
                        <div class="card card-block h-100 justify-content-center">
                            <div class="card-block">
                                <center>
                                    <h3 class="card-title">Le Monde</h3>
                                    <img src="image/lemonde/photo.jpg" alt="Smiley face" height="50" width="50">
                                </center>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3">
                    <a href="premium.php?page=3">
                        <div class="card card-block h-100 justify-content-center">
                            <div class="card-block">
                                <center>
                                    <h3 class="card-title">01net.com</h3>
                                    <img src="image/01net/01net.png" alt="Smiley face" height="50" width="50">
                                </center>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3">
                    <a href="premium.php?page=4">
                        <div class="card card-block h-100 justify-content-center">
                            <div class="card-block">
                                <center>
                                    <h3 class="card-title">Hitek</h3>
                                    <img src="image/hitek/hitek.jpg" alt="Smiley face" height="50" width="50">
                                </center>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Science -->
    <div class="tab-pane" id="Science" role="tabpanel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    <a href="premium.php?page=5">
                        <div class="card card-block h-100 justify-content-center">
                            <div class="card-block">
                                <center>
                                    <h3 class="card-title">Air et Cosmos</h3>

                                    <img src="image/aircosmos/aircosmos.png" alt="Smiley face" height="50" width="50">
                                </center>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3">
                    <a href="premium.php?page=6">
                        <div class="card card-block h-100 justify-content-center">
                            <div class="card-block">
                                <center>
                                    <h3 class="card-title">Sciences et Avenir</h3>

                                    <img src="image/scienceav/sciencea.jpg" alt="Smiley face" height="50" width="50">
                                </center>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3">
                    <a href="premium.php?page=7">
                        <div class="card card-block h-100 justify-content-center">
                            <div class="card-block">
                                <center>
                                    <h3 class="card-title">CNRS Le journal</h3>

                                    <img src="image/crns/cnrs-lejournal-140.jpg" alt="Smiley face" height="50" width="50">
                                </center>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3">
                    <a href="premium.php?page=8">
                        <div class="card card-block h-100 justify-content-center">
                            <div class="card-block">
                                <center>
                                    <h3 class="card-title">Science-Presse</h3>

                                    <img src="image/asp/asp.png" alt="Smiley face" height="50" width="50">
                                </center>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Sport -->
    <div class="tab-pane" id="Sport" role="tabpanel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    <a href="premium.php?page=9">
                        <div class="card card-block h-100 justify-content-center">
                            <div class="card-block">
                                <center>
                                    <h3 class="card-title">L'équipe</h3>

                                    <img src="image/lequipe/lequipelogo.png" alt="Smiley face" height="50" width="50">
                                </center>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Presse -->
        <div class="tab-pane" id="Presse" role="tabpanel">
            <div class="container-fluid">
                <div class="row">

                </div>
            </div>
        </div>
        <!-- cité -->
        <div class="tab-pane" id="cité" role="tabpanel">
            <div class="container-fluid">
                <div class="row">

                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- Menu -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-1">
                <?php
                if (isset($_SESSION['pseudo'])) {
                    $pseudo = $_SESSION['pseudo'];

                    echo "<h4>" . $pseudo . "</h4>";
                }
                ?>
                <nav class="nav flex-column">
                    <?php
                    if (isset($_SESSION['pseudo'])) {
                        echo"
                    <a class=\"nav-link active\" href=\"index.php\">Accueil </a>
                    <a class=\"nav-link active\" href=\"premium.php\">100% Abonné</a>
                    <a class=\"nav-link active\" href=\"favoris.php\">Articles enregistré </a>";
                    }
                    ?>
                    <?php
                    if (!isset($_SESSION['pseudo'])) {
                        echo"<a class=\"nav-link disabled\" href=\"#\">Votre profil ici !</a>";
                    }
                    ?>
                </nav>
            </div>
            <div class="col-sm-11">
                <div class="card">
                    <div class="card-block">
                        <div class="container-fluid">
                            <div class="row">
                                <?php
                                if (isset($_POST['recherche'])) {
                                    $mots = $_POST["mots"];
                                    if (isset($mots)){
                                        recherche($db_connection, $mots, $id_utilisateur);
                                    }
                                }
                                if (isset($_GET['page'])) {
                                    $page = $_GET['page'];
                                } else {
                                    $page = 0;
                                }
                                switch ($page) {
                                    case 1:
                                        include("journal_premium/20minutes.php");
                                        break;
                                    case 2:
                                        include("journal_premium/lemonde.php");
                                        break;
                                    case 3:
                                        include("journal_premium/01net.php");
                                        break;
                                    case 4:
                                        include("journal_premium/Hitek.php");
                                        break;
                                    case 5:
                                        include("journal_premium/aircosmos.php");
                                        break;
                                    case 6:
                                        include("journal_premium/scienceav.php");
                                        break;
                                    case 7:
                                        include("journal_premium/crns.php");
                                        break;
                                    case 8:
                                        include("journal_premium/sciencepress.php");
                                        break;
                                    case 9:
                                        include("journal_premium/lequipe.php");
                                        break;
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
