<?php
$server = "project-phase2.mysql.database.azure.com";
$username = "projectphase2"; 
$password = "Nedamcoacademy2"; 
$database = "eras";


// Create a database connection
$conn = new mysqli($server, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
