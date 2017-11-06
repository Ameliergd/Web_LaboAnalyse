<?php
include('include/database.php'); // Import de la configuration

if (!$_SESSION['uid']) {
    header("Location:medecin.php");
    die();
}

$db = getDB(); // Création de la connection à la base de données
$query = $db->prepare("INSERT INTO patient (nom,prenom,sexe,age,email,password,num_secu) VALUES (?,?,?,?,?,?,?)"); // Préparation de la requête en passant par la connection définie précédemment

if (!empty($_POST['adduserform'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $sexe = $_POST['sexe'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $num_secu = $_POST['numsecu'];
    $query->execute(array($nom, $prenom, $sexe, $age, $email, $password, $num_secu));
    header("Location:patients.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hero - Free Bulma template</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Bulma Version 0.6.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css"
          integrity="sha256-HEtF7HLJZSC3Le1HcsWbz1hDYFPZCqDhZa9QsCgVUdw=" crossorigin="anonymous"/>
</head>

<body>


  <nav class="navbar">
      <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="index.html">
                <img src="images/logo.png" alt="Logo">
            </a>
            <div class="navbar-item">
                <p>Espace Médecin</p>
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
  </nav>

<div class="hero is-success is-bold">
    <div class="hero-body container has-text-centered">
        <h1 class="title">
            Ajouter un nouveau patient.
        </h1>
    </div>
</div>
<div class="section container">
    <div class="columns">
        <div class="column is-7 is-offset-2">
            <form method="post" action="">

                <div class="field is-horizontal">
                    <div class="field-label">
                        <label class="label">Patient</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <p class="control is-expanded">
                                <input class="input" type="text" placeholder="Nom" name="nom" required>
                            </p>
                        </div>
                        <div class="field">
                            <p class="control is-expanded">
                                <input class="input" type="text" placeholder="Prénom" name="prenom" required>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="field is-horizontal">
                    <div class="field-label">
                        <label class="label">Email</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <p class="control is-expanded has-icons-left">
                                <input class="input" type="text" placeholder="mail@mail.com" name="email" required>
                                <span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i>
</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="field is-horizontal">
                    <div class="field-label">
                        <label class="label">Mot de Passe</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <p class="control is-expanded has-icons-left">
                                <input class="input" type="password" placeholder="*******" name="password" required>
                                <span class="icon"><i class="fa fa-key" aria-hidden="true"></i>
</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="field is-horizontal">
                    <div class="field-label">
                        <label class="label">Sexe</label>
                    </div>
                    <div class="field-body">
                        <div class="field is-narrow">
                            <div class="control">
                                <label class="radio">
                                    <input type="radio" name="sexe" value="M">
                                    Masculin
                                </label>
                                <label class="radio">
                                    <input type="radio" name="sexe" value="F">
                                    Féminin
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="field is-horizontal">
                    <div class="field-label">
                        <label class="label">Âge</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <p class="control">
                                <input class="input" type="number" name="age" required>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="field is-horizontal">
                    <div class="field-label">
                        <label class="label">N° Sécu</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <p class="control has-icons-left">
                                <input class="input" type="text" name="numsecu" required>
                                <span class="icon">
                                <i class="fa fa-id-card-o" aria-hidden="true"></i>

                            </span>

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
                                <input type="submit" class="button is-success" name="adduserform">
                                <a class="button is-danger" href="patients.php">
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

<script src="js/navbarburger.js"></script>
</body>

</html>
