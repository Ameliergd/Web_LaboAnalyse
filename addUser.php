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

    <div class="section container">
        <div class="columns">
            <div class="column is-7 is-offset-2">
                <form method="post" action="#">

            <div class="field is-horizontal">
                <div class="field-label">
                    <label class="label">Patient</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <p class="control is-expanded">
                            <input class="input" type="text" placeholder="Nom">
                        </p>
                    </div>
                    <div class="field">
                        <p class="control is-expanded">
                            <input class="input" type="text" placeholder="Prénom">
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
                            <input class="input" type="text" placeholder="mail@mail.com">
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
                            <input class="input" type="password" placeholder="*******">
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
                                <input type="radio" name="sexe">
                                Masculin
                            </label>
                            <label class="radio">
                                <input type="radio" name="sexe">
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
                            <input class="input" type="number">

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
                            <input class="input" type="text" name="numsecu">
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
                            <input type="submit" class="button is-success">                            
                            <a class="button is-danger" href="Analyse.php">
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



</body>

</html>
