<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "12345";
$db_name = "aquascape";

try {
    $db = new PDO ("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);

} catch (PDOException $e) {
    die ("Terjadi Masalah: " . $e->getMessage());
}

?>