
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'databse.php';
include 'header.php';
?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="header.css" rel="stylesheet" type="text/css"/>
        <link href="aa/food menu.css" rel="stylesheet" type="text/css"/>
        
        <script src="admin.js" type="text/javascript"></script>
         <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <script src="admin.js" type="text/javascript"></script>
    </head>
    
        <body>
   <div class="col-6">
       <div class="newfoodbody">
                
                    <div class="imagebody">  
                
                          <?php
                             $select="SELECT *FROM newfood";
                               $que= mysqli_query($con, $select);
                             if(mysqli_num_rows($que)>0)
                                  {
                 
                                    while($rows= mysqli_fetch_array($que))
                                           {
                                              ?>
                                 <div  class="single_imagebody " style="float: left"> 
                                             
                
                                              <img  src="../image/<?php echo $rows['image']  ?>" ><br>
                                              <p class="p1"><?php echo $rows['name']  ?></p>
                                              <p class="p2"><?php echo $rows['price']  ?></p>
                                 </div>      
                                          
                                 <?php
                             }
                           }
                       ?>
           
                  </div>
       <div class="homespecial">
                  
                  <?php
                 
                  $select="SELECT * FROM `newfood` WHERE homespacial='yes'";
                  $que= mysqli_query($con, $select);
              if(mysqli_num_rows($que)>0)
              {
                  ?>
                  <div  class="home_special"style="float: left;">
                      <p style="color: wheat;"> T_lounge Special Food Order your tትlልላwውnንgግ eአsስpፕፐsስhህሃlል mምgግbብቦcችhህ </p>
                  </div> 
                  <?php
                  while($rows= mysqli_fetch_array($que))
                  {
                      ?>
              
                           
                                        <div  class="single_imagebody"> 
                                              
                
                                              <img  src="../image/<?php echo $rows['image']  ?>" ><br>
                                              <p class="p1"><?php echo $rows['name']  ?></p>
                                              <p class="p2"><?php echo $rows['price']  ?></p>
                                                
                                        </div>
                      <?php         
                  }
              
              } 
          ?>   
            
                  
     </div>
              
       
   </div>                 
   </body>
   