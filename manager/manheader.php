<?php
$servername="localhost";
$user="root";
$password="";
$database="project";
$con= new mysqli( $servername ,$user,$password,$database);
$today = date(" g:i a");  
?>
<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <link href="manager.css" rel="stylesheet" type="text/css"/>
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
                    
                     <li > <a class="list2" href="newfood.php"><i class="fas fa-hamburger "></i> ADD NEW FOOD</a></li>
                    <?php
                     if(mysqli_num_rows($que)>0)
                     {       
                         ?><span class="new_message"> <i style="color: yellow" class="fas fa-comment"></i></span><?php
                                
                            
                     
                     }
                     
                     ?>
                    
                  
                    <li > <a class="list1" href="new_order.php"><i class="fab fa-rocketchat"></i>NEW ORDER</a> </li>
                   
                    <li class="list3"> <a href="permanent.php"><i class="fas fa-users"></i>    PERMANENT CUSTOMER</a></li>
                    
                   
                    <li class="list5"> <a href="customer_feedback.php"><i class="fas fa-box-open"></i> CUSTOMER FEEDBACK</a></li>
                    
                    
                 </ul>
                
            </div>      
        </section>
        
        <div>
           
        </div>
        
    </body>

</html>