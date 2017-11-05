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
    <td><a class='delPatient' style='color: red;' id='". $row['idPatient'] ."'><span class='icon'>
                <i class='fa fa-trash' aria-hidden='true'></i></i>
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
    <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <!-- Bulma Version 0.6.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css" integrity="sha256-HEtF7HLJZSC3Le1HcsWbz1hDYFPZCqDhZa9QsCgVUdw=" crossorigin="anonymous" />
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
            <th scope="col">ID</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Âge</th>
            <th scope="col">Sexe</th>
            <th scope="col"></th>
            <th scope="col"></th>
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
        $(".delPatient").click(function() {
          $("#".concat(this.id)).addClass("animated bounceOut");
          $.post('include/deleteUser.php', {"id": this.id});
        })
      });

    </script>

  </body>

  </html>
