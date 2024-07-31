<?php
$DB_Name = "basememoire";
$DB_Server = "127.0.0.1";
$DB_User = "root";
$DB_Password = "passer";

$DB = new PDO("mysql:host={$DB_Server};dbname={$DB_Name};charsst=utf8" ,$DB_User, $DB_Password);
$DB->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>