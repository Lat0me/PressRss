<!doctype html>
<?php
require_once "function/database/database.php";
require_once "function/connexion/connexion.php";
?>

<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Inscription - Press.fr</title>
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
</head>
<body>
<div class="card text-center">
    <div class="card-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-8">
                    <h5 class="card-title">Inscription Press.fr</h5>
                    <form method="post" action="inscription.php">
                        <input type="text" class="form-control" placeholder="Nom" name="nom"><br>
                        <input type="text" class="form-control" placeholder="Prénom" name="prenom"><br>
                        <input type="text" class="form-control" placeholder="Pseudo" name="pseudo"><br>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                               placeholder="E-mail" name="mail"><br>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Mots de passe"><br>
                        <input type="password" name="passwordConfirmation" class="form-control" id="exampleInputPassword1" placeholder="Confirmation mots de passe"><br>
                        <button type="submit" class="btn btn-primary" name="inscription">Envoyer</button>
                    </form>
                    <?php
                    if (isset($_POST['inscription'])) {
                        $password1 = $_POST["password"];
                        $password2 = $_POST["passwordConfirmation"];
                        if (strlen($password2) >= 8){
                            if ($password1 == $password1){
                                $mail = $_POST["mail"];
                                $nom = $_POST["nom"];
                                $prenom = $_POST["prenom"];
                                $pseudo = $_POST["pseudo"];

                                inscription($mail, $password1, $nom, $prenom, $pseudo, $db_connection);
                            }else{
                                echo "
                            <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                                <strong>Mots de passe</strong> Doit être identique.
                            </div>
                            ";
                            }
                        }else{
                            echo "
                            <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                                <strong>Mots de passe</strong> Doit être supérieur ou égal à 8 caractère.
                            </div>
                            ";
                        }
                    }
                    seDeconnecter($db_connection);
                    ?>
                </div>
                <div class="col-sm-2">
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>