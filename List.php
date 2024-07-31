<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, DELETE");
header("Access-Control-Allow-Headers: Content-Type");

include("DB.php");

$Requette = $DB->prepare("SELECT * FROM produit");
$Requette->execute();
$Result = $Requette->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($Result);
?>