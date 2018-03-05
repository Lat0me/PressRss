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
<div id="continuer"></div>
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
                    echo "
                    <a class=\"nav-link active\" href=\"index.php\">Accueil </a>
                    <a class=\"nav-link active\" href=\"premium.php\">100% Abonné</a>
                    <a class=\"nav-link active\" href=\"favoris.php\">Articles enregistré </a>";
                }
                ?>
                <?php
                if (!isset($_SESSION['pseudo'])) {
                    echo "<a class=\"nav-link disabled\" href=\"#\">Votre profil ici !</a>";
                }
                ?>
            </nav>
        </div>
        <div class="col-sm-11">
            <div class="card">
                <div class="card-block">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card card-block h-100 justify-content-center">
                                    <div class="card-block">
                                        <center>
                                            <h3>Vos articles enregistrés :</br>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                            </h3>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <?php
                            mesArticle($id_utilisateur, $db_connection);
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


