<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=Laboratoire_Analyse;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
