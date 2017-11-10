<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Localisation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css">
</head>

<body>

    <nav class="navbar">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="index.html">
                <img src="images/logo.png" alt="Logo">
            </a>
                <a class="navbar-burger" data-target="navbarMenu">
                <span></span>
                <span></span>
                <span></span>
            </a>
            </div>
            <div id="navbarMenu" class="navbar-menu">

                <div class="navbar-start">

                    <a class="navbar-item">ACCUEIL</a>

                    <div class="navbar-item has-dropdown is-hoverable">
                        <p class="navbar-link is-active">
                            INFORMATIONS
                        </p>

                        <div class="navbar-dropdown is-boxed">
                            <a class="navbar-item is-active" href="localisation.php">
                                        Nous Localiser
                                    </a>
                            <a class="navbar-item" href="informations.html">
                                        Info Complementaire
                                    </a>
                        </div>
                    </div>
                </div>
                <div class="navbar-end is-grouped is-right">

                    <div class="navbar-item control">
                        <a class="button is-primary" href="connectionPatient.php" target="_blank">
                                  <span class="icon">
                                      <i class="fa fa-user" aria-hidden="true"></i>
                                  </span>
                                <span>ESPACE CLIENT</span>
                            </a>
                    </div>
                    <div class="navbar-item control">
                        <a class="button is-info" href="medecin.php" target="_blank">
                                  <span class="icon">
                                      <i class="fa fa-user-md" aria-hidden="true"></i>
                                  </span>
                                <span>ESPACE MEDECIN</span>
                            </a>
                    </div>

                </div>

            </div>
        </div>
    </nav>
</body>

</html>
