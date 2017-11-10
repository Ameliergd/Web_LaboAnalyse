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
    <div class="hero is-link is-bold has-text-centered">
        <div class="hero-body container">
            <h1 class="title">Laboratoire d’Analyses Médicales à Lille – Centre Biologique HEI
            </h1>

        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="tile is-ancestor">
                <div class="tile is-vertical">
                    <div class="tile">
                        <div class="tile is-parent is-vertical">
                            <div class="tile is-child">
                                <figure class="image is-4by3">
                                    <img src="images/hei.jpg">
                                </figure>

                            </div>
                            <div class="tile is-child message is-link">
                                <div class="message-header">
                                    <p>Votre laboratoire de proximité</p>
                                </div>
                                <div class="message-body">
                                    <div class="content">
                                        <p>•Traitement des urgences</p>
                                        <p>•Personnel hautement qualifié</p>
                                        <p>•Des équipements technologiques à la pointe de la performance</p>
                                        <p>•Des biologistes à votre disposition pour interpréter vos résultats et répondre à vos questions</p>
                                        <p>•Prise en charge de vos frais médicaux</p>
                                    </div>
                                </div>

                            </div>


                        </div>

                    </div>
                </div>





                <div class="tile is-parent is-vertical">
                    <div class="tile is-child message is-link">
                        <div class="message-header">
                            <p> Horaires et Informations</p>
                        </div>
                        <div class="message-body">
                            <div class="content">
                                <p> Le laboratoire vous accueille</p>

                                <p>•du Lundi au Vendredi de 7h00 à 18h30</p>
                                <p>•le Samedi de 7h30 à 12h30 </p>
                                <p>Adresse : 13 Rue de Toul, 59000 Lille.</p>
                            </div>
                        </div>
                    </div>
                        <div class="tile is-child">
                            <article class="message is-link">
                                <div class="message-header">
                                    <p>Plan d'accès</p>
                                </div>
                                <div class="message-body">
                            <figure class="image is-256x256">
                                <img src="images/plan.png" />
                            </figure>
                                </div>
                            </article>
                        

                    </div>
                </div>
            </div>


        </div>
    </div>

</body>

</html>
