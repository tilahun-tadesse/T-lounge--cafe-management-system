<?php


include 'manheader.php';
include 'databse.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
       <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
       <link href="new_order.css" rel="stylesheet" type="text/css"/>
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
                        <th>Sex</th>
                        <th>Phone</th>
                        <th>Campus</th>
                        
                        
                    </tr>
        </thead>
        <tbody>
         <?php   
             $select="SELECT *FROM permanentcustomer";
             $que= mysqli_query($con, $select);
             if(mysqli_num_rows($que)>0)
             {
              while($rows= mysqli_fetch_array($que))
                  { 
                  ?>
                
                <tbody>
                
                    <tr style="color: black;"> 
                        <td><?php echo $rows['id'];?></td>
                        <td><?php echo $rows['firstname'];?></td>
                        <td><?php echo $rows['lastname'];?></td>
                       <td><?php echo $rows['sex'];?></td>
                        <td><?php echo $rows['phone'];?></td>
                        <td><?php echo $rows['campus'];?></td>
                       
                        
                         
                       
                       
                           
                        
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
