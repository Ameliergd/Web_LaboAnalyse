<?php
include('include/database.php');


$output = "";

$db = getDB();
$query = $db->prepare("SELECT patient.idPatient, patient.nom, patient.prenom FROM patient INNER JOIN prelevement p ON p.`idPatient`=patient.idPatient INNER JOIN medecin m ON p.`idMedecin`=m.idMedecin WHERE m.idMedecin=:idMedecin ORDER BY nom;");
$query->bindParam("idMedecin", $_SESSION['uid'], PDO::PARAM_INT);
$query->execute();
$count=$query->rowCount();

while($row = $query->fetch())
{
  $output = $output. "
  <tr>
    <td>".$row['idPatient']."</td>
    <td>".$row['nom']."</td>
    <td>".$row['prenom']."</td>
    <td>27-09-2017</td>
    <td><a href='#'>+ d'infos<span class='icon'>
                <i class='fa fa-info-circle' aria-hidden='true'></i>
                </span></a></td>
    <td><a class='icon'>
                    <i class='fa fa-pencil' aria-hidden='true'></i>
                    </a></td>
  </tr>";
}


?>

  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hero - Free Bulma template</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Bulma Version 0.6.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css" integrity="sha256-HEtF7HLJZSC3Le1HcsWbz1hDYFPZCqDhZa9QsCgVUdw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/accueil.css">
  </head>

  <body>

    <div class="container">
      <div class="hero-head">
        <nav class="navbar">
          <div class="container">
            <div class="navbar-brand">
              <p class="navbar-item">
                <img src="images/logo.png" alt="Logo">
              </p>
              <div class="navbar-item">
                <p>Expace Médecin</p>
              </div>
            </div>
            <span class="navbar-burger burger" data-target="navbarMenu">
                            <span></span>
            <span></span>
            <span></span>
            </span>
            <div class="navbar-end">
              <div class="navbar-item">
                <a class="button is-danger" href="medecin.php">
                                    Logout
                                </a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <div class="container">
      <div class="columns">
        <div class="column is-5 is-offset-one-quarter">
          <div class="level">
            <div class="level-left">
              <div class="level-item">
                <div class="field has-addons">
                  <p class="control">
                    <input class="input" type="text" placeholder="Nom du patient">
                  </p>
                  <p class="control">
                    <button class="button is-info">
                                <span class="icon">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </span>
                            </button>
                  </p>
                </div>
              </div>
            </div>

            <div class="level-right">
              <div class="level-item">
                <p class="control">
                  <a class="button is-success" href="addUser.php">
                            <span class="icon">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </span>
                        </a>
                </p>
              </div>
              <div class="level-item">
                <p class="control">
                  <button class="button is-danger">
                            <span class="icon">
                                <i class="fa fa-minus" aria-hidden="true"></i>
                            </span>
                        </button>
                </p>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
    <div class="section container">
      <table class="table is-hoverable is-striped is-fullwidth">
        <thead>
          <tr>
            <th><abbr title="IdPatient">ID</abbr></th>
            <th><abbr title="Nom">Nom</abbr></th>
            <th><abbr title="Prénom">Prénom</abbr></th>
            <th><abbr title="Date">Date</abbr></th>
            <th><abbr></abbr></th>
            <th><abbr></abbr></th>
          </tr>
        </thead>
        <tbody>

          <?php echo($output); ?>

        </tbody>

      </table>
    </div>

  </body>

  </html>
