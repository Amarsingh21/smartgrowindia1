<h2>UpDate your data.</h2>
<?php
    include "connection.php";
    
    $id=$_GET['id'];
    
    $fetch='select * from contacts where id='.$id.'';
    $query=mysqli_query($conn,$fetch);
    
    $data=mysqli_fetch_array($query);
    
    echo '<form method="post" action="update.php">
    
        Name: 
        <input type="text" name="name" value="'.$data['name'].'"><br><br>
        Mobile: 
        <input type="text" name="mobile" value="'.$data['mobile'].'"><br><br>
        Email:
        <input type="email" name="email" value="'.$data['email'].'"><br><br>
        Subject:
        <input type="text" name="subject" value="'.$data['subject'].'"><br><br>
        Description:
        <input type="int" name="comment" value="'.$data['comment'].'"><br><br>
        
        <input type="hidden" name="id" value="'.$id.'">
        
        <input type="submit" name="save">
        <button><a href="./viewdata.php">View Table</a></button>
        </form>';
        
?>