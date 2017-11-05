<?php
include('database.php');

$id = htmlspecialchars($_POST['id']);
$db = getDB();

$delete = $db->prepare("DELETE FROM patient WHERE idPatient=:id;");
$delete->bindParam(":id", $id, PDO::PARAM_INT);
$delete->execute();

?>
