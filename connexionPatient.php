<?php
// ini_set('display_errors', 'on');
// error_reporting(E_ALL);

include('include/database.php');
include('include/userClass.php');

$_SESSION['uid']= null;
$_SESSION['pid']= null;

$userClass = new userClass();


$errorMsgLogin = '<br/>';
/* Login Form */
if (!empty($_POST['loginSubmit'])) {
    $usernameEmail = $_POST['usernameEmail'];
    $password = $_POST['password'];
    if (strlen(trim($usernameEmail)) > 1 && strlen(trim($password)) > 1) {
        $res = $userClass->patientLogin($usernameEmail, $password); // Fonction de vérification des identifiants
        if ($res) {
            $url = BASE_URL . 'infosPatient.php?id=' . $_SESSION['pid'];
            header("Location: $url"); // Redirection vers la page index.html
        } else {
            $errorMsgLogin = '<p class="tag is-large is-danger">Please check login details.</p>';
        }
    }
}


?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Espace Patient</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Bulma Version 0.6.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css"
          integrity="sha256-HEtF7HLJZSC3Le1HcsWbz1hDYFPZCqDhZa9QsCgVUdw=" crossorigin="anonymous"/>

</head>

<body>
<section class="hero is-light is-fullheight">
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="column is-4 is-offset-4">
                <h3 class="title has-text-grey">Espace Patient</h3>
                <p class="subtitle has-text-grey"> Vos Resultats en ligne .</p>
                <div class="box">
                    <figure class="avatar">
                        <img src="images/user.png">
                    </figure>
                    <form method="post" action="" name="login">
                        <div class="field">
                            <div class="control has-icons-left has-icons-right">
                                <input class="input" type="email" placeholder="Email" autofocus="" name="usernameEmail">
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
                        <div class="level">
                            <div class="level-item">
                                <input class="button is-block is-info is-large" type="submit" name="loginSubmit"
                                       value="Login">
                            </div>
                        </div>
                        <div>
                            <?php echo($errorMsgLogin); ?>

                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>
</section>


</body>

</html>
