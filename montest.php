<?php

$servername = "81.19.215.11:3306";
$username = "ibcmgcom_magasinibc_user";
$password = "ibc2020@IBC";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";