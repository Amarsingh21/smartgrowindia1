<html>
    <head>
        <style>
            @media only screen and (min-width: 600px){
                .main-db-view{
                    width:100%;
                    height:auto;
                    margin: 0 70px 0 70px;
                    
                }
            }
        </style>
    </head>
    <body >
     <?php include ("./header.html"); ?>
        <div class="main-db-view" style="width:100%;margin: 0 70px 0 70px;display:flex;align-items:center; justify-content:center;flex-direction:column;"> 
        <h2>Employees Database</h2>
        <table border="1px" rule="all">
            <tbody>
        <tr>
        <th>id</th>
        <th>First-Name</th>
        <th>Last-Name</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Business</th>
        <th>Payment</th>
        <th>Date</td>
        <th>Comment</th>
        </tr>
        
        <?php
        
        include "./pay/connection.php";
        
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
        </tr>';
        }
        ?>
        </tbody>
        </table>
        </div>
        <?php include ("./footer.html"); ?>
        </body>
</html>
