<?php
include "connection.php";

$id=$_GET['id'];
$queryy="DELETE FROM contacts WHERE id='$id'";
$result = mysqli_query($conn,$queryy);

if ($result) {echo 'Successfully Deleted your data';} else {echo 'Data is Not Deleted';}

echo '<br><br><button><a href="./index.php">Home</a></button>';
echo '<button><a href="./viewdata.php">View Table</a></button>';

?>