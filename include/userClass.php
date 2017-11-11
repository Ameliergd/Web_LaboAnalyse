<?php


class userClass
{
    /* Médecin Login */
    public function medecinLogin($usernameEmail, $password)
    {
        try {
            $db = getDB();
            // $hash_password= hash('sha256', $password); // utiliser hash_password si les mdp sont chiffrés
            $stmt = $db->prepare("SELECT idMedecin, email, password, nom FROM medecin WHERE email=:usernameEmail AND password=:password");
            $stmt->bindParam(":usernameEmail", $usernameEmail, PDO::PARAM_STR);
            $stmt->bindParam(":password", $password, PDO::PARAM_STR);
            $stmt->execute();
            $count = $stmt->rowCount();
            $data = $stmt->fetch(PDO::FETCH_OBJ);
            $db = null;
            if ($count) {
                $_SESSION['uid'] = $data->idMedecin; // Stockage de l'id dans une variable de session
                $_SESSION['nomMedecin'] = $data->nom;
                $_SESSION['loggedIn'] = true;
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo '{"error":{"text":' . $e->getMessage() . '}}';
        }
    }

    /* User Login */
    public function patientLogin($usernameEmail, $password)
    {
        try {
            $db = getDB();
            $stmt = $db->prepare("SELECT idPatient, email, password, nom FROM patient WHERE email=:usernameEmail AND password=:password");
            $stmt->bindParam(":usernameEmail", $usernameEmail, PDO::PARAM_STR);
            $stmt->bindParam(":password", $password, PDO::PARAM_STR);
            $stmt->execute();
            $count = $stmt->rowCount();
            $data = $stmt->fetch(PDO::FETCH_OBJ);
            $db = null;
            if ($count) {
                $_SESSION['pid'] = $data->idPatient; // Stockage de l'id dans une variable de session
                $_SESSION['nomPatient'] = $data->nom;
                $_SESSION['loggedIn'] = true;
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo '{"error":{"text":' . $e->getMessage() . '}}';
        }
    }
}
