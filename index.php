<!doctype html>
<?php
require_once "function/fluxRss/rss.php";
require_once "function/database/database.php";
require_once "function/connexion/connexion.php";

session_start();
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
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">

    <!-- function javascript -->
    <script type="text/javascript" src="myjs/myjs.js"></script>
</head>
<body>
<!--Header -->
<div class="card text-center">
    <div class="card-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-8">
                    <h4 class="card-title">Press.fr</h4>
                    <p class="card-text">Lisez vos articles ou vous voulez</p>
                    <a href="#continuer" class="btn btn-primary">Continuez</a>
                </div>
                <div class="col-sm-2">
                    <?php
                    if(isset($_SESSION['pseudo'])){
                        echo "<div style='display:none;'>";
                    }
                    ?>
                    <h5 class="card-title">Connexion</h5>
                    <form method="post" action="index.php">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                               placeholder="E-mail" name="mail"><br>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mots de passe"
                               name="password"><br>
                        <button type="submit" class="btn btn-primary" name="connexion">Connexion</button>
                    </form>
                    <?php
                    if (isset($_POST['connexion'])) {
                        $mail = $_POST["mail"];
                        $password = $_POST["password"];
                        connexion($mail, $password, $db_connection);
                    }
                    seDeconnecter($db_connection);
                    ?>
                    <a href="inscription.php">Inscription</a>
                    <?php
                    if(isset($_SESSION['pseudo'])){
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
        </div>
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
                    <a href="index.php?page=1">
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
                    <a href="index.php?page=2">
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
                    <a href="index.php?page=3">
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
                    <a href="index.php?page=4">
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
                    <div class="card card-block h-100 justify-content-center">
                        <div class="card-block">
                            <center>
                                <h3 class="card-title">Air et Cosmos</h3>

                                <img src="image/aircosmos/aircosmos.png" alt="Smiley face" height="50" width="50">
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card card-block h-100 justify-content-center">
                        <div class="card-block">
                            <center>
                                <h3 class="card-title">Sciences et Avenir</h3>

                                <img src="image/scienceav/sciencea.jpg" alt="Smiley face" height="50" width="50">
                            </center>
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
            $pseudo = $_SESSION['pseudo'];
            echo "<h4>" . $pseudo . "</h4>"
            ?>
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
                    <?php
                    if(!isset($_SESSION['pseudo'])){
                        echo "<div style='display:none;'>";
                    }
                    ?>
                    <div class="container-fluid">
                        <div class="row">
                            <?php
                            if (isset($_GET['page'])) {
                                $page = $_GET['page'];
                            } else {
                                $page = 0;
                            }
                            switch ($page) {
                                case 1:
                                    include("Journal/20minutes.php");
                                    break;
                                case 2:
                                    include("Journal/lemonde.php");
                                    break;
                                case 3:
                                    include("Journal/01net.php");
                                    break;
                                case 4:
                                    include("Journal/Hitek.php");
                                    break;
                            }
                            ?>
                        </div>
                    </div>
                    <?php
                    if(!isset($_SESSION['pseudo'])){
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
