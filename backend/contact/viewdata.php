<html>
    <body style="width:100%;display:flex;align-items:center; justify-content:center;flex-direction:column;">
        
        <table border="1px" rule="all">
            <tbody>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Mobile-no</th>
            <th>Email</td>
            <th>Subject</td>
            <th>Comment</th>
            <th>Edit</td>
            <th>Delete</th>
        </tr>
        
        <?php
        
        include "connection.php";
        
        // echo 'check';
        $fetch='select * from contacts';
        
        $query=mysqli_query($conn,$fetch);
        
        
        $num=mysqli_num_rows($query);
        
        for($i=0;$i<$num;$i++)
        {
            
            $data=mysqli_fetch_array($query);
        
        echo '<tr>
        <td>'.$data['id'].'</td>
        <td>'.$data['name'].'</td>
        <td>'.$data['mobile'].'</td>
        <td>'.$data['email'].'</td>
        <td>'.$data['subject'].'</td>
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
