<?php

function dataArticle($id, $db_connection, $id_utilisateur)
{
    $id_journal = $id;
    $query = "SELECT * FROM article WHERE journal = '" . $id . "'ORDER BY date DESC;";
    if ($result = mysqli_query($db_connection, $query)) {
        while ($row = mysqli_fetch_assoc($result)) {
            $lien = $row["lien"];
            $titre = $row["titre"];
            $description = $row["description"];
            $date = $row["date"];
            $id_article = $row["id"];
            afficherArticle($titre, $lien, $date, $description, $db_connection, $id_article, $id_utilisateur, $id_journal);
        }
    }
}

function afficherArticle($titre, $lien, $date, $description, $db_connection, $id_article, $id_utilisateur, $id_journal)
{
    echo "
            <div class=\"col-sm-12\">
                <div class='card card-block h-100 justify-content-center'>
                    <div class='card-block'>
                    <center>
                        <h5 class='card-title'>" . $titre . "</h5>
                        <p>" . $description . "</p>
                        <a href='$lien' class='btn btn-primary'>Consultez l'article</a><br>
                        " . $date . "<br>
                        <form method='POST'>
                            <center>
                                <button name=\"$id_article\" type=\"submit\" class=\"btn btn - secondary\"><i class=\"fa fa-thumbs-up\" aria-hidden=\"true\"></i></button>
                            </center>
                        </form>
                    </center>
                    </div>
                </div>
            </div>";
    if (isset($_POST[$id_article])) {
        saveBestArticle($db_connection, $id_article, $id_utilisateur, $id_journal);
    }
}

function saveBestArticle($db_connection, $id_article, $id_utilisateur, $id_journal)
{
    $requete = "INSERT INTO article_enregistre VALUES (NULL, '" . $id_utilisateur . "', '" . $id_journal . "', '" . $id_article . "');";
    // execution de la requte avec des résultats
    $req = mysqli_query($db_connection, $requete) or die('Erreur SQL !<br />' . $requete . '<br />' . mysqli_error($db_connection));
}

function recherche($db_connection, $mots, $id_utilisateur)
{
    $query = "SELECT * FROM article WHERE lien REGEXP '" . $mots . "' OR titre REGEXP  '" . $mots . "' OR description REGEXP  '" . $mots . "'";
    if ($result = mysqli_query($db_connection, $query)) {
        echo "
    <div class=\"col-sm-12\">
        <div class='card card-block h-100 justify-content-center'>
            <div class='card-block'>
            <center>
                <div class=\"alert alert-info\">
                    <span>Recherche pour <strong>" . $mots . "</strong>.</span>
                </div>
            </center>
            </div>
        </div>
    </div>

        ";
        while ($row = mysqli_fetch_assoc($result)) {
            $titre = $row["titre"];
            $description = $row["description"];
            $lien = $row["lien"];
            $date = $row["date"];
            $id_article = $row["id"];
            $id_journal = $row["journal"];

            afficherArticle($titre, $lien, $date, $description, $db_connection, $id_article, $id_utilisateur, $id_journal);
        }
        echo "<div style='display:none'> ";
    } else {
        echo "
<div class=\"alert alert-info\">
    <strong>Voici la recherche pour</strong> " . $mots . ".
</div>
        ";
    }
}

function afficherFavoris($titre, $lien, $date, $description, $id_article)
{
    echo "
            <div class=\"col-sm-12\">
                <div class='card card-block h-100 justify-content-center'>
                    <div class='card-block'>
                    <center>
                        <h5 class='card-title'>" . $titre . "</h5>
                        <p>" . $description . "</p>
                        <a href='$lien' class='btn btn-primary'>Consultez l'article</a><br>
                        " . $date . "<br>
                        <form method='POST'>
                            <center>
                                <button name=\"$id_article\" type=\"submit\" class=\"btn btn - secondary\"><i class=\"fa fa-thumbs-up\" aria-hidden=\"true\"></i></button>
                            </center>
                        </form>
                    </center>
                    </div>
                </div>
            </div>";
}

function mesArticle($id_utilisateur, $db_connection){
    $id = $id_utilisateur;
    $query = "SELECT * FROM article_enregistre WHERE id_utilisateur = '" . $id . "';";
    if ($result = mysqli_query($db_connection, $query)) {
        $articles = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $id_article = $row["id_article"];
            $articles[] = $id_article;
        }
        foreach($articles as $id_article)
        {
            $query = "SELECT * FROM article WHERE id = '" . $id_article . "'ORDER BY date DESC;";
            if ($result = mysqli_query($db_connection, $query)) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $lien = $row["lien"];
                    $titre = $row["titre"];
                    $description = $row["description"];
                    $date = $row["date"];
                    $id_article = $row["id"];
                    afficherFavoris($titre, $lien, $date, $description, $id_article);
                }
            }

        }




    }

}
