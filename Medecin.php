<?php
include('database.php');
session_start();

echo "ok";

if (isset($_POST['Formconnexion']))
{
    $email = htmlspecialchars($_POST['email']);
    $password = sha1_file($_POST['password']);
    
    if (!empty($email) AND !empty ($password))
    {
        $requser->prepare ("SELECT*FROM MEDECIN WHERE Email=? AND Password=?");
        $requser->execute (array ($email,$password));
        $userexist=$requser->rowCount();
        
        if ($userexist==1)
        {
            $userinfo=$requser->fetch();
            $_SESSION['idMedecin']=$userinfo['idMedecin'];
            $_SESSION ['Email']=$userinfo['Email'];
            header ("Location : Analyse.php? idMedecin=$_idMedecin");
        }
        else 
        {
        $erreur ="Mauvais Mail ou mauvais mot de passe";
        }
    }
    else 
        {
        $erreur ="Tout les champs doivent être remplis";
        }    
}                        
?>

<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Informations</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <!-- Bulma Version 0.6.0 -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css" integrity="sha256-HEtF7HLJZSC3Le1HcsWbz1hDYFPZCqDhZa9QsCgVUdw=" crossorigin="anonymous" />
        <link rel="stylesheet" type="text/css" href="../css/login.css">
        <link rel="stylesheet" href="css/medecin.css">

    </head>

    <body>
        <section class="hero is-success is-fullheight">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="column is-4 is-offset-4">
                        <h3 class="title has-text-grey">Espace Médecin</h3>
                        <p class="subtitle has-text-grey">Page réservée pour les profesionnels de la santé.</p>
                        <div class="box">
                            <figure class="avatar">
                                <img src="http://localhost:8888/Web_LaboAnalyse/images/generalistes.png">
                            </figure>
                            <form method="post" action="">
                                <div class="field">
                                    <div class="control has-icons-left has-icons-right">
                                        <input class="input" type="email" placeholder="Email" autofocus="" name="email">
                                        <span class="icon is-small is-left">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                        <span class="icon is-small is-right">
                                            <i class="fa fa-check"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="control has-icons-left">
                                        <input class="input" type="password" placeholder="Password" name="password">
                                        <span class="icon is-small is-left">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="checkbox">
                  <input type="checkbox">
                  Remember me
                </label>
                                </div>
                                <a class="button is-block is-info is-large" href="Analyse.php" name="Formconnexion">Login</a>
                            </form>
                        </div>
                        <p class="has-text-grey">
                            <a href="../">Sign Up</a> &nbsp;·&nbsp;
                            <a href="../">Forgot Password</a> &nbsp;·&nbsp;
                            <a href="../">Need Help?</a>
                        </p>
                    </div>

                </div>

            </div>
        </section>
        <script async type="text/javascript" src="../js/bulma.js"></script>


    </body>

    </html>