<?php
$serverName = "project-phase2.mysql.database.azure.com";
$username = "projectphase2";
$password = "Nedamcoacademy2";
$databaseName = "eras";
$conn = new mysqli($serverName, $username, $password, $databaseName) or die("Could not connect to mysql" . mysqli_error($con));
