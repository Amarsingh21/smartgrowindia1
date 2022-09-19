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

echo '<div><br></div>';

$insert='insert into employees (fname,lname,phone,email,business,payment,date,comment) values 
("'.$fname.'","'.$lname.'","'.$phone.'","'.$email.'","'.$business.'","'.$payment.'","'.$date.'","'.$comment.'")';

$query=mysqli_query($conn,$insert);

if ($query) {echo 'Successfully Submitted your data';} else {echo 'find error';}

echo '<div><a href="/">Home</a> </div>';
?>