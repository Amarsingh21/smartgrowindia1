<?php
include "connection.php";

$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$comment=$_POST['comment'];
$id=$_POST['id'];
$queryy='UPDATE contacts SET name="'.$name.'", mobile="'.$mobile.'",email="'.$email.'", subject="'.$subject.'", comment="'.$comment.'" WHERE id="'.$id.'"';
$result = mysqli_query($conn,$queryy);

if ($result) {echo 'Successfully Updated your data';} else {echo 'No Updated';}

echo '<br><br><button><a href="./index.php">Home</a></button>';
echo '<button><a href="./viewdata.php">View Table</a></button>';

?>