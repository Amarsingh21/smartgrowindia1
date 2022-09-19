<h2>UpDate your data.</h2>
<?php
    include "connection.php";
    
    $id=$_GET['id'];
    
    $fetch='select * from employees where id='.$id.'';
    $query=mysqli_query($conn,$fetch);
    
    $data=mysqli_fetch_array($query);
    
    echo '<form method="post" action="update.php">
    
        First Name: 
        <input type="text" name="fname" value="'.$data['fname'].'"><br><br>
        Last Name: 
       Last Name: <br>
        <input type="text" name="lname" value="'.$data['lname'].'" autocomplete="false" required><br><br>
        Mobile No: <br>
        <input type="text" name="phone" value="'.$data['phone'].'" autocomplete="false" required><br><br>
        Email: <br>
        <input type ="email" name="email" value="'.$data['email'].'" autocomplete="false" required><br><br>
        Business: <br>
        <input type="text" name="business" value="'.$data['business'].'" autocomplete="false" required><br><br>
        Payment: <br>
        <input type ="text" name="payment" value="'.$data['payment'].'" autocomplete="false" required><br><br>
        Date: <br>
        <input type ="date" name="date" value="'.$data['date'].'" autocomplete="false" required><br><br>
        Comment :<br>
        <textarea type ="text" name="comment" value="'.$data['comment'].'" row="5" cols="50"></textarea><br><br>

        <input type="hidden" name="id" value="'.$id.'">
        
        <input type="submit" name="save">
        <button><a href="./viewdata.php">View Table</a></button>
        </form>';
        
?>