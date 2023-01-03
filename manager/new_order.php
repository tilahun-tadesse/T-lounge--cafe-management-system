<?php

$host="localhost";
$user="root";
$password="";
$database="project";

$conn= new mysqli($host, $user, $password, $database);


if(isset($_GET['id'])) 
{
$id=$_GET['id'];
$delete="DELETE FROM userorder WHERE id=$id";
mysqli_query($conn, $delete)  ;
}   
include'manheader.php';
include'databse.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="manager.css" rel="stylesheet" type="text/css"/>
        <link href="new_order.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
       <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
       <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

        
                
    </head>
    <body>
        <div class="col-6">
            <div class="table-wrapper">
    <table class="fl-table">
        <thead>
                 <tr>
                        <th>Student Id</th>
                        <th>Full Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Building</th>
                        <th>Oreder Start</th>
                        <th>Time limit</th>
                        <th>Food Name</th>
                        <th>Total Price</th>
                        <th>Quantity</th>
                       
                    </tr>
        </thead>
        <tbody>
         <?php   
             $select="SELECT *FROM userorder";
             $que= mysqli_query($con, $select);
             if(mysqli_num_rows($que)>0)
             {
              while($rows= mysqli_fetch_array($que))
                  { 
                  ?>
                
                <tbody>
                
                    <tr style="color: black;"> 
                        <td><?php echo $rows['studentid'];?></td>
                        <td><?php echo $rows['firstname'];?></td>
                        <td><?php echo $rows['lastname'];?></td>
                        <td><?php echo $rows['email'];?></td>
                        <td><?php echo $rows['phone'];?></td>
                        <td><?php echo $rows['building'];?></td>
                        <td><?php echo $rows['orderstart'];?></td>
                        <td><?php echo $rows['lasttime'];?></td>
                        <td><?php echo $rows['foodname'];?></td>
                        
                        <td><?php echo $rows['totalprice'];?></td>
                        <td><?php echo $rows['quantity'];?></td>
                        
                         
                        
                       
                           
                        
                    </tr>
               
                </tbody>
                
                <?php
                
                }
                }
                ?>
    </table>     
        
</div>

        </div>  
    </body>
</html>

