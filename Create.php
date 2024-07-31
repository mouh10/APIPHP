<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, DELETE");
header("Access-Control-Allow-Headers: Content-Type");

include("DB.php");

$Nom = $_POST['Nom'];
$Description = $_POST['Description'];
$Prix = (int) $_POST['Prix'];
$Quantite = (int) $_POST['Quantite'];

$Requette = $DB->prepare("INSERT INTO produit (`Nom`, `Description`, `Prix`, `Quantite`) VALUES (?,?,?,?)");
$Result = $Requette->execute([$Nom, $Description, $Prix, $Quantite]);

echo json_encode(['sucess' => 
    $Result]);
?>