<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'databse.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="aa/header.css" rel="stylesheet" type="text/css"/>
        <link href="../aa/header.css" rel="stylesheet" type="text/css"/>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    </head>
    <body >
       <section class="c">
            <nav >
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">T_LOUNGE</label>
      <ul>
        <li><a class="first active" href="#">Home</a></li>
        <li><a class="first" href="#">About</a></li>
        <li><a class="first" href="#">Services</a></li>
        <li><a class="first" href="#">Contact</a></li>
        <li><a class="first" href="#">Feedback</a></li>
      </ul>
    </nav>
        </section>
        <section class="col-3">
             <div class="side">
                <ul class='ulnav'>
                    <?php
                      $select="SELECT *FROM userorder";
                   $que= mysqli_query($con, $select);
               
                   ?>
                    
                   
                    <?php
                     if(mysqli_num_rows($que)>0)
                     {     
                                
                         ?><span class="new_message"> <i style="color: yellow" class="fas fa-comment"></i></span><?php
                                
                         
                     
                     }
                     
                     ?>
                     <li > <a class="list1" href="neworder.php"><i class="fab fa-rocketchat"></i>NEW ORDER</a> </li>
                     <li class="list2"> <a href="foodmenu.php"><i class="fas fa-users"></i> FOOD MENU</a></li>
                    
                   
                </ul>
                
            </div>      
        </section>
        
        <div>
           
        </div>
        
    </body>
</html>

