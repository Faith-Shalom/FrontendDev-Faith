<?php
$servername = "localhost";
$username = "root";
$password = "pease";
$database = "chitechma_travels";

// Create Connection
$conn = new mysql($servername, $username,$password);

// Create connection
if ($conn->connet_error) {
    die("Connection failed: " .$conn->connect_error);
}
echo "Connected successfully";
?>
<!--My project-->