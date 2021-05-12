<?php

$servername = "81.19.215.11";
$username = "ibcmgcom_magasinibc_user";
$password = "ibc2020@IBC";

echo "Connected test";

try {
    $dbh = new PDO('mysql:host=81.19.215.11;dbname=ibcmgcom_magasinibc', $username, $password);

    $dbh = null;
    echo "Connected successfully";
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}