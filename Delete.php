<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, DELETE");
header("Access-Control-Allow-Headers: Content-Type");

include("DB.php");

$Id = (int) $_GET['Id'];

$Requette = $DB->prepare("DELETE FROM produit WHERE Id = ?");
$Result = $Requette->execute([$Id]);

echo json_encode(['Id' => $Id,
'sucess' => $Result
]);
?>