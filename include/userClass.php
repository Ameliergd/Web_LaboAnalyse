<?php


class userClass
{
    /* User Login */
    public function userLogin($usernameEmail, $password)
    {
        try {
            $db = getDB();
            $id = "";
            // $hash_password= hash('sha256', $password); //Password encryption
            $stmt = $db->prepare("SELECT idMedecin, email, password FROM medecin WHERE email=:usernameEmail AND password=:password");
            $stmt->bindParam(":usernameEmail", $usernameEmail, PDO::PARAM_STR) ;
            $stmt->bindParam(":password", $password, PDO::PARAM_STR) ;
            $stmt->execute();
            $count=$stmt->rowCount();
            $data=$stmt->fetch(PDO::FETCH_OBJ);
            $db = null;
            if ($count) {
                $_SESSION['uid']=$data->id; // Storing user session value
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
}
