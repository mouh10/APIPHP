<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, DELETE");
header("Access-Control-Allow-Headers: Content-Type");

include("DB.php");

$Id = (int) $_POST['Id'];
$Nom = $_POST['Nom'];
$Description = $_POST['Description'];
$Prix = (int) $_POST['Prix'];
$Quantite = (int) $_POST['Quantite'];

$Requette = $DB->prepare("UPDATE produit SET `Nom` = ?, `Description` = ?, `Prix` = ?, `Quantite` = ? WHERE `Id` = ?");
$Result = $Requette->execute([$Nom, $Description, $Prix, $Quantite, $Id]);

echo json_encode(['sucess' => 
    $Result
]);
?>