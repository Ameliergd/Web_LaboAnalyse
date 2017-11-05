<?php
include('include/database.php'); // Import de la configuration

if (!$_SESSION['uid']) {
    header("Location:medecin.php");
    die();
}

$patientId = $_GET['id'];

$output = "";
$db = getDB(); // Création de la connection à la base de données
$query = $db->prepare("INSERT INTO prelevement (datePrel,typePrel) VALUES (?,?)"); // Préparation de la requête en passant par la connection définie précédemment
$query1 = $db->prepare("INSERT INTO analyse (nomAnalyse,resultat,commentaire) VALUES (?,?,?)");

if (!empty($_POST['addanalyseform'])) {
    $datPrel = $_POST['date'];
    $TypePrel = $_POST['prelevement'];
    $nomAnalyse = $_POST['analyse'];
    $resultat = $_POST['resultat'];
    $commentaire = $_POST['commentaire'];

    $output = implode(' ', array($datPrel, $TypePrel, $nomAnalyse, $resultat, $commentaire));

    $query->execute(array($datPrel, $TypePrel));
    $query1->execute(array($nomAnalyse, $resultat, $commentaire));

//    header("Location:infosPatient.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nouvelle Analyse</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Bulma Version 0.6.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css"
          integrity="sha256-HEtF7HLJZSC3Le1HcsWbz1hDYFPZCqDhZa9QsCgVUdw=" crossorigin="anonymous"/>
</head>

<body>
<div>
    <section class="hero is-info is-bold">
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title"> Ajouter une Analyse</h1>
            </div>
        </div>
    </section>
    <div class="section container">
        <div class="columns">
            <div class="column is-7 is-offset-3">
                <form method="POST" action="">
                    <div class="columns">
                        <div class="column">
                            <div class="level">
                                <div class="level-left">
                                    <div class="level-item">
                                        <label class="label">Date</label>
                                    </div>
                                </div>
                                <div class="level-right">
                                    <div class="level-item">
                                        <p class="control is-expended">
                                            <input class="input is-info" type="date" name="date" required>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="level">
                                <div class="level-left">
                                    <div class="level-item">
                                        <label class="label">Prelevement</label>
                                    </div>
                                </div>
                                <div class="level-right">
                                    <div class="level-item">
                                        <div class="select is-info is-expended">
                                            <select name="prelevement" required>

                                                <option value="sanguin">Sanguin</option>
                                                <option value="Urianire">Urinaire</option>
                                                <option value="salivaire">salivaire</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="column">

                            <div class="level">
                                <div class="level-left">
                                    <div class="level-item">
                                        <label class="label">Analyse</label>
                                    </div>
                                </div>
                                <div class="level-right">
                                    <div class="level-item">
                                        <p class="control is-expanded">
                                            <input class="input is-info" type="text" placeholder="Analyse"
                                                   name="analyse" required>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="level">
                                <div class="level-left">
                                    <div class="level-item">
                                        <label class="label">Resultat</label>
                                    </div>
                                </div>
                                <div class="level-right">
                                    <div class="level-item">
                                        <p class="control is-expanded">
                                            <input class="input is-info" type="text" placeholder="OK" name="resulat"
                                                   required>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <div class="label">
                            <label class="label">Commentaire</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control is-expanded">
                                    <textarea class="textarea is-info" placeholder="Commentaire" rows="8"
                                              name="commentaire"></textarea>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="field is-horizontal">
                        <div class="field-label">
                            <!-- Left empty for spacing -->
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control is-pulled-right">
                                    <input type="submit" class="button is-success" name="addanalyseform">
                                    <a class="button is-danger" href="infosPatient.php">
                                        Annuler
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
