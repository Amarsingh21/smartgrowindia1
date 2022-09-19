<?php
include "connection.php";

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$business=$_POST['business'];
$payment=$_POST['payment'];
$date=$_POST['date'];
$comment=$_POST['comment'];
$id=$_POST['id'];
$queryy='UPDATE employees SET fname="'.$fname.'",lname="'.$lname.'", phone="'.$phone.'",
    email="'.$email.'", business="'.$business.'", payment="'.$payment.'",date="'.$date.'", comment="'.$comment.'" WHERE id="'.$id.'"';
$result = mysqli_query($conn,$queryy);

if ($result) {echo 'Successfully Updated your data';} else {echo 'No Update';}

echo '<br><br><button><a href="./index.php">Home</a></button>';
echo '<button><a href="./viewdata.php">View Table</a></button>';

?>