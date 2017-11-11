<?php
include('include/database.php');
include('session.php');

$db = getDB();
$userId = htmlspecialchars($_GET['id']);


function getPrelevements()
{
    $prelevements = "";
    $db = getDB();
    $sql = 'SELECT DISTINCT typePrel FROM prelevement ORDER BY typePrel;';
    foreach ($db->query($sql) as $row) {
        $prelevements = $prelevements . "<option value='" . $row['typePrel'] . "'>" . $row['typePrel'] . "</option>";
    }
    return $prelevements;
}

/* Infos personnelles du patient */
$infos = $db->prepare("SELECT nom, prenom, sexe, age, email, num_secu FROM patient WHERE idPatient=:userId;");
$infos->bindParam(":userId", $userId, PDO::PARAM_INT);
$infos->execute();
$count = $infos->rowCount();
$data = $infos->fetch(PDO::FETCH_OBJ);
$db = null;
if ($count) {
    $nom = implode(' ', array($data->nom, $data->prenom));
    $email = $data->email;
    $sexe = GenderSymbol($data->sexe);
    $age = $data->age;
    $numSecu = $data->num_secu;
}

/* Tableau des prélèvements et analyses */
$tab = "";

$db = getDB();
$recap = $db->prepare("SELECT `datePrel`, `typePrel`, m.nom nomMedecin, a.nomAnalyse analyse, a.resultat resultat, a.commentaire commentaire FROM prelevement pr INNER JOIN patient pa ON pr.`idPatient`=pa.idPatient INNER JOIN medecin m ON pr.`idMedecin`=m.idMedecin INNER JOIN analyse a ON pr.`idPrelevement`=a.idPrelevement WHERE pa.`idPatient`=:idPatient;");
$recap->bindParam(":idPatient", $userId, PDO::PARAM_INT);
$recap->execute();
while ($row = $recap->fetch()) {
    $tab = $tab . "

  <tr>
      <td>" . $row['datePrel'] . "</td>
      <td>" . strtoupper($row['nomMedecin']) . "</td>
      <td>" . $row['typePrel'] . "</td>
      <td>" . $row['analyse'] . "</td>
      <td>" . $row['resultat'] . "</td>
      <td><div class='dropdown is-hoverable is-right'>
  <div class='dropdown-trigger'>
    <span class='icon' aria-haspopup='true' aria-controls='dropdown-menu4'>
      <i class='fa fa-info-circle' aria-hidden='true'></i>
    </p>
  </div>
  <div class='dropdown-menu' id='dropdown-menu2' role='menu'>
    <div class='dropdown-content'>
      <div class='dropdown-item'>
        <p>" . $row['commentaire'] . "</p>
      </div>
    </div>
  </div>
</div></td>
  </tr>
  ";
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Infos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <!-- Bulma Version 0.6.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css"
          integrity="sha256-HEtF7HLJZSC3Le1HcsWbz1hDYFPZCqDhZa9QsCgVUdw=" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/responsivetable.css" />
</head>

<body>

  <nav class="navbar">
      <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="index.html">
                <img src="images/logo.png" alt="Logo">
            </a>
            <div class="navbar-item">
                <p>Infos</p>
            </div>
            <a class="navbar-burger" data-target="navbarMenu">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>
        <div id="navbarMenu" class="navbar-menu">
          <div class="navbar-end">
              <div class="navbar-item">
                  <a class="button is-danger" href="medecin.php">
                      Logout
                  </a>
              </div>
          </div>
      </div>
    </div>
  </nav>

<div class="hero is-info is-bold">
    <div class="hero-body container">
        <h1 class="title">Fiche patient</h1>
        <h2 class="subtitle"><?php echo($nom); ?></h2>
        <!--<p>uid: <?php /*echo($_SESSION['uid']); */?></p>
        <p>pid: <?php /*echo($_SESSION['pid']); */?></p>-->
    </div>
</div>

<form method="post" action="">
    <div class="modal">

        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Ajouter une Analyse</p>
                <button class="delete" aria-label="close" onclick="hideModal()"></button>
            </header>
            <section class="modal-card-body">

                <div class="level">
                    <div class="level-left">
                        <div class="level-item">
                            <div class="field is-horizontal">
                                <div class="field-label">
                                    <label class="label">Date</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <p class="control is-expended">
                                            <input class="input is-info" type="date" name="date" required>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="level-right">
                        <div class="level-item">
                            <div class="field is-horizontal">
                                <div class="field-label">
                                    <label class="label">Analyse</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <p class="control is-expanded">
                                            <input class="input is-info" type="text" placeholder="Analyse"
                                                   name="analyse" required>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="level">
                    <div class="level-left">
                        <div class="level-item">
                            <div class="field is-horizontal">
                                <div class="field-label">
                                    <label class="label">Prelevement</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control is-expanded">
                                            <div class="select is-info is-fullwidth">
                                                <select name="prelevement" required>

                                                    <?php echo(getPrelevements()); ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="level-right">
                        <div class="level-item">
                            <div class="field is-horizontal">
                                <div class="field-label">
                                    <label class="label">Resultat</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <p class="control is-expanded">
                                            <input class="input is-info" type="text" placeholder="OK" name="resulat"
                                                   required>
                                        </p>
                                    </div>
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


            </section>

            <footer class="modal-card-foot">
                <input type="submit" class="button is-success" name="addAnalyseForm">
                <button class="button" onclick="hideModal()">Cancel</button>
            </footer>
        </div>
    </div>
</form>


<div class="section">
    <div class="columns">
        <div class="column is-3 card is-paddingless">
            <div class="card-image">
                <figure class="image">
                    <img src="http://www.fillmurray.com/200/150" alt="Photo de profil">
                </figure>
            </div>
            <div class="card-content">
              <div class="content">
                <p><strong><?php echo($nom); ?></strong></p>
                <p><strong>Sexe: </strong>
                    <?php echo($sexe); ?>
                </p>
                <p><strong>Email: </strong>
                    <?php echo($email); ?>
                </p>
                <p><strong>Age: </strong>
                    <?php echo($age); ?>
                </p>
                <p><strong>Num sécu: </strong>
                    <?php echo($numSecu); ?>
                </p>
              </div>

            </div>
            <?php
            if ($_SESSION['uid']) {
                echo('<div class="card-footer">
                <a class="card-footer-item" id="showModal"><span class="icon"><i class="fa fa-pencil"
                                                                                 aria-hidden="true"></i>
</span>Modifier</a>
                <a href="#" class="card-footer-item"><span class="icon"><i class="fa fa-trash-o" aria-hidden="true"></i></span>Supprimer</a>
            </div>');
            }

            ?>
        </div>
        <div class="column">
            <table class="table is-hoverable is-striped is-fullwidth is-responsive">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>Medecin</th>
                    <th>Type Prélèvement</th>
                    <th>Analyses</th>
                    <th>Résultat</th>
                    <th>Commentaire</th>
                </tr>
                </thead>
                <tbody>

                <?php echo($tab); ?>

                </tbody>

            </table>
        </div>
    </div>
</div>
<script src="js/navbarburger.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
    $("#showModal").click(function () {
        $(".modal").addClass("is-active");
        $(".modal-card").addClass("animated slideInDown");
        $(".modal-background").addClass("animated fadeIn");
    });

    function hideModal() {
        $(".modal").removeClass("is-active");
    }
</script>
</body>

</html>
