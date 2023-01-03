<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<html>
    <head>
        <title>TODO supply a title</title>
        <link href="tabel.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
      
    
        
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
                 <tr>
                        
                        <th>FULL Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Building</th>
                        <th>Oreder Start</th>
                        <th>Time limit</th>
                        <th>Food Name</th>
                        <th>Total Price</th>
                        <th>Quantity</th>
                        <th>Done</th>
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
                
                    <tr> 
                        
                        <td><?php echo $rows['fullname'];?></td>
                        <td><?php echo $rows['email'];?></td>
                        <td><?php echo $rows['phone'];?></td>
                        <td><?php echo $rows['building'];?></td>
                        <td><?php echo $rows['orderstart'];?></td>
                        <td><?php echo $rows['lasttime'];?></td>
                        <td><?php echo $rows['foodname'];?></td>
                        
                        <td><?php echo $rows['totalprice'];?></td>
                        <td><?php echo $rows['quantity'];?></td>
                        
                         
                        <td> <a href="neworder.php?id=<?php echo $rows['id'];?>"> <input type="submit" value="deliver" name="deliver" /> </a>
                       
                           
                        
                    </tr>
               
                </tbody>
                
                <?php
                
                }
                }
                ?>
    </table>     
        
</div>
    </body>
</html>