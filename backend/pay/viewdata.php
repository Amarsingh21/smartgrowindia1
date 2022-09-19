<html>
    <body style="width:100%;display:flex;align-items:center; justify-content:center;flex-direction:column;">
        <h2>View Database</h2>
        <table border="1px" rule="all">
            <tbody>
        <tr>
        <td>id</td>
        <td>First-Name</td>
        <td>Last-Name</td>
        <td>Phone Number</td>
        <td>Email</td>
        <td>Business</td>
        <td>Payment</td>
        <td>Date</td>
        <td>Comment</td>
        <td>Edit</td>
        <td>Delete</td>
        </tr>
        
        <?php
        
        include "connection.php";
        
        // echo 'check';
        $fetch='select * from employees';
        
        $query=mysqli_query($conn,$fetch);
        
        
        $num=mysqli_num_rows($query);
        
        for($i=0;$i<$num;$i++)
        {
            
            $data=mysqli_fetch_array($query);
        
        echo '<tr>
        <td>'.$data['id'].'</td>
        <td>'.$data['fname'].'</td>
        <td>'.$data['lname'].'</td>
        <td>'.$data['phone'].'</td>
        <td>'.$data['email'].'</td>
        <td>'.$data['business'].'</td>
        <td>'.$data['payment'].'</td>
        <td>'.$data['date'].'</td>
        <td>'.$data['comment'].'</td>
        <td>'.$data['edit'].'<a href="updatedata.php?id='.$data['id'].'">Edit</a></td>
        <td>'.$data['delete'].'<a href="delete.php?id='.$data['id'].'">Delete</a></td>
        </tr>';
        }
        ?>
        </tbody>
        </table>
        <?php
        echo '<button><a href="./index.php">Add Data</a></button>';
        echo '<button><a href="updatedata.php?id='.$data['id'].'">Update Row</a></button>';
        ?>
        </body>
</html>
