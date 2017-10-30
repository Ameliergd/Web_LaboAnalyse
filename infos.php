<?php
include('database.php');
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
    <link rel="stylesheet" type="text/css" href="../css/hero.css">
    <link rel="stylesheet" href="css/accueil.css">
</head>

<body>

    <div class="container">
        <div class="hero-head">
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-brand">
                        <p class="navbar-item" href="#">
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
                            <a class="button is-danger" href="Medecin.php">
                                Logout
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="section">
        <div class="columns">
            <div class="column is-3 card is-paddingless">
                <div class="card-image">
                    <figure class="image">
                        <img src="https://engineering.unl.edu/images/staff/Kayla_Person-small.jpg" alt="Photo de profil">
                    </figure>
                </div>
                <div class="card-content">
                    <p><strong>Andrea Fields</strong></p>
                    <p><strong>Sexe:</strong> <span class="icon"><i class="fa fa-venus" aria-hidden="true"></i></span></p>
                    <p><strong>Email:</strong> andrea-93@example.com</p>
                    <p><strong>Age:</strong> 25</p>
                    <p><strong>Num sécu: </strong>987987070917124087</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="card-footer-item"><span class="icon"><i class="fa fa-pencil" aria-hidden="true"></i>
</span>Modifier</a>
                    <a href="#" class="card-footer-item"><span class="icon"><i class="fa fa-trash-o" aria-hidden="true"></i></span>Supprimer</a>
                </div>
            </div>
            <div class="column">
                <table class="table is-hoverable is-striped is-fullwidth">
                    <thead>
                        <tr>
                            <th><abbr title="Date">Date</abbr></th>
                            <th><abbr title="medecin">Medecin</abbr></th>
                            <th><abbr title="Type">Type Prélèvement</abbr></th>
                            <th><abbr title="Analyse">Analyses</abbr></th>
                            <th><abbr title="Resultat">Résultat</abbr></th>
                            <th><abbr title="Rapport">Commentaire</abbr></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>27-05-2017</td>
                            <td>HUCHARD</td>
                            <td>Selles</td>
                            <td>Cocaïne</td>
                            <td>25mg</td>
                            <td><a class="icon">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                            </a></td>
                        </tr>
                        <tr>
                            <td>12-09-2016</td>
                            <td>LOURDELLE</td>
                            <td>Sanguin</td>
                            <td>Diabete</td>
                            <td>SIDA</td>
                            <td><a class="icon">
                            <i class="fa fa-info-circle" aria-hidden="true"></i>

                            </a></td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>



</body>

</html>
