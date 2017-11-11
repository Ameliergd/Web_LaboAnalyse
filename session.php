<?php
if (!empty($_SESSION['loggedIn'])) {
    if (!empty($_SESSION['uid'])){
        $session_uid = $_SESSION['uid'];
    }
    if (!empty($_SESSION['pid'])){
        $session_uid = $_SESSION['pid'];
    }

    include('include/userClass.php');
    $userClass = new userClass();
}
if (empty($session_uid)) {
    $url = BASE_URL . 'index.html';
    header("Location: $url");
}
?>
