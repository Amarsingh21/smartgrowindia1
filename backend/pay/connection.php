<?php
$servername = "localhost";
$username = "popcelingdesign_emp";
$password = "h_t#!m_ZW6nB";
$dbname = "popcelingdesign_emp";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
// if ($conn) {echo 'Connected';} else {echo 'not connected';}

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>