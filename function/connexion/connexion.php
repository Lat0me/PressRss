<?php

function id ($mail, $password, $db_connection)
{
    $query = 'SELECT id FROM utilisateur WHERE mail = "' . $mail . '" AND mots_de_passe = "' . md5($password) . '";';
    $req = mysqli_query($db_connection, $query) or die('Erreur SQL !<br />' . $query . '<br />' . mysqli_error());
    $rid = mysqli_fetch_array($req);
    $id = $rid[0];
    return $id;
}

function nom ($mail, $password, $db_connection)
{
    $query = 'SELECT nom FROM utilisateur WHERE mail = "' . $mail . '" AND mots_de_passe = "' . md5($password) . '";';
    $req = mysqli_query($db_connection, $query) or die('Erreur SQL !<br />' . $query . '<br />' . mysqli_error());
    $rid = mysqli_fetch_array($req);
    $nom = $rid[0];
    return $nom;
}

function prenom ($mail, $password, $db_connection)
{
    $query = 'SELECT prenom FROM utilisateur WHERE mail = "' . $mail . '" AND mots_de_passe = "' . md5($password) . '";';
    $req = mysqli_query($db_connection, $query) or die('Erreur SQL !<br />' . $query . '<br />' . mysqli_error());
    $rid = mysqli_fetch_array($req);
    $prenom = $rid[0];
    return $prenom;
}

function pseudo ($mail, $password, $db_connection)
{
    $query = 'SELECT pseudo FROM utilisateur WHERE mail = "' . $mail . '" AND mots_de_passe = "' . md5($password) . '";';
    $req = mysqli_query($db_connection, $query) or die('Erreur SQL !<br />' . $query . '<br />' . mysqli_error());
    $rid = mysqli_fetch_array($req);
    $pseudo = $rid[0];
    return $pseudo;
}

function seDeconnecter($db_connection)
{
    mysqli_close($db_connection);
}

function connexion($mail, $password, $db_connection)
{
    $requete = 'SELECT count(*) FROM utilisateur WHERE
mail="' . $mail . '" AND mots_de_passe="' . md5($password) . '";';
    // execution de la requte avec des résultats
    $req = mysqli_query($db_connection, $requete) or die('Erreur SQL !<br />' . $requete . '<br />' . mysqli_error());
    $data = mysqli_fetch_array($req);
    mysqli_free_result($req);
    // si on obtient une réponse, alors l'utilisateur est un membre
    if ($data[0] == 1) {
        session_start();
        $_SESSION['mail'] = $mail;
        $_SESSION['id'] = id($mail, $password, $db_connection);
        $_SESSION['nom'] = nom($mail, $password, $db_connection);
        $_SESSION['prenom'] = prenom($mail, $password, $db_connection);
        $_SESSION['pseudo'] = pseudo($mail, $password, $db_connection);
    } // si on ne trouve aucune réponse, le visiteur s'est trompé soit dans son login, soit dans son mot de passe
    elseif ($data[0] == 0) {
        $erreur = '<br><div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        Compte non reconnu.
                    </div>';
        echo $erreur;
    } // sinon, alors la, il y a un gros problème :)
    else {
        $erreur = 'Probème dans la base de données : plusieurs membres ont les mêmes identifiants de connexion.';
        echo $erreur;
    }
}

function inscription($mail, $password1, $nom, $prenom, $pseudo, $db_connection)
{
    $requete = "INSERT INTO utilisateur VALUES (NULL, '" . $nom . "', '"  . $prenom .  "', '"  . $pseudo .  "', '"  .  $mail .  "', '" . md5($password1) . "' );";
    // execution de la requte avec des résultats
    $req = mysqli_query($db_connection, $requete) or die('Erreur SQL !<br />' . $requete . '<br />' . mysqli_error($db_connection));
    header('Location:index.php');
}
