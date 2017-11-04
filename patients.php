<?php
include('include/database.php');

if (!$_SESSION['uid']){
    header("Location:medecin.php");
    die();
}

$output = "";

$db = getDB();
$query = $db->prepare("SELECT idPatient, nom, prenom, sexe, age FROM patient ORDER BY nom;");
$query->bindParam("idMedecin", $_SESSION['uid'], PDO::PARAM_INT);
$query->execute();
$count=$query->rowCount();

while($row = $query->fetch())
{
  $output = $output. "
  <tr>
    <td>".$row['idPatient']."</td>
    <td>".strtoupper($row['nom'])."</td>
    <td>".$row['prenom']."</td>
    <td>". $row['age'] ." </td>
    <td>". GenderSymbol($row['sexe']) ." </td>
    <td><a href='" . BASE_URL . "infosPatient.php?id=" . $row['idPatient'] . "'>+ d'infos<span class='icon'>
                <i class='fa fa-info-circle' aria-hidden='true'></i>
                </span></a></td>
  </tr>";
}


?>

  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Patients</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Bulma Version 0.6.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css" integrity="sha256-HEtF7HLJZSC3Le1HcsWbz1hDYFPZCqDhZa9QsCgVUdw=" crossorigin="anonymous" />
    <!-- Ajax Typeahead script -->

    <style>
    /* filter table specific styling */
    td.alt { background-color: #ffc; background-color: rgba(255, 255, 0, 0.2); }
    </style>
  </head>

  <body>


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
    <div class="hero is-bold is-info">
      <div class="hero-body">
        <div class="container">
          <h1 class="title">
                Bienvenue Dr. <?php echo($_SESSION['nomMedecin']); ?>
              </h1>
        </div>
      </div>
    </div>

    <div class="section container">
      <table class="table is-hoverable is-striped is-fullwidth sieve">
        <thead>
          <tr>
            <th scope="col"><abbr title="IdPatient">ID</abbr></th>
            <th scope="col"><abbr title="Nom">Nom</abbr></th>
            <th scope="col"><abbr title="Prénom">Prénom</abbr></th>
            <th scope="col"><abbr title="Age">Âge</abbr></th>
            <th scope="col"><abbr title="Sexe">Sexe</abbr></th>
            <th scope="col"><abbr></abbr></th>
          </tr>
        </thead>
        <tbody>

          <?php echo($output); ?>

        </tbody>

      </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/jquery.sieve.min.js"></script>
    <script>
      $(document).ready(function() {
      $("table.sieve").sieve();
      });
    </script>

  </body>

  </html>
