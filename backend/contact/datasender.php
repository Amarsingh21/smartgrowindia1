<?php

include "connection.php";

$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$comment=$_POST['comment'];


$insert='insert into contacts (name,mobile,city,comment) values("'.$name.'","'.$mobile.'","'.$email.'","'.$subject.'","'.$comment.'")';

$query=mysqli_query($conn,$insert);

if ($query) {echo 'Successfully Submitted your Request, We Contact As soon as Possible.';} else {echo 'No Submitted , Please try again';}

echo '<div><a href="/">Home</a> </div>';
?>