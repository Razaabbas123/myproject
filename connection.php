<?php
$servername = "localhost";
$username = "root";
$password = "";
$DB="raza";

// Create connection
$conn = new mysqli($servername, $username, $password, $DB);

// Check connection
if ($conn->connect_error) {
 echo "unsuccessfull
 ";
}
echo "";
?>