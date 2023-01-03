<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'custheader.php';
include 'databse.php';



if(isset($_POST['submit']))
{
    $firstname=$_POST['name'];
    $lastname=$_POST['lname'];
    $id=$_POST['id'];
    $email=$_POST['email'];
    $uer=$_POST['user'];
    $password=$_POST['password'];
   
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];
    $building=$_POST['building'];
    

/*$insert="INSERT INTO `permanentcustomer`(`id`, `firstname`, `lastname`, `email`, "
        . "`username`, `password`, `sex`, `phone`, `campus`) VALUES "
        . "('$id','$firstname'','$lastname','$email','$uer','$password',"
        . "'$gender','$phone','$building')";*/
    $insert="INSERT INTO `permanentcustomer`(`id`, `firstname`, `lastname`, `email`,"
            . " `username`, `password`, `sex`, `phone`, `campus`) VALUES ("
            . "'$id','$firstname','$lastname','$email','$uer','$password',"
            . "'$gender','$phone','$building')";
$result=mysqli_query($con, $insert);
?>
                                          <script>
                                              alert("you seccessfully signin")
                                              location.replace("permanent_customer.php");
                                          </script>
                                       <?php
}



?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="permanent_customer.js" type="text/javascript"></script>
        <link href="permanent_customer.css" rel="stylesheet" type="text/css"/>
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    </head>
    
        <body>
          <div class="col-6">
            <div>
                
                 
                <div id="creat_login" class="creat_login">
                       
                       
                    <form method="post" action="registration_1.php">
                        <button type="button"  name="login" onclick="show();" >login</button>
                        <input type="submit" value="create account" name="create" />
                    </form>
                    </div>  
                <div id="hidden_form_1" class="hidden_form">
                    <form  method="post">
                            

                            <div class="container_form">
                               <label for="uname"><b>Username</b></label>
                                 <input type="text" placeholder="Enter Username" name="uname" required>

                                 <label for="psw"><b>Password</b></label>
                                  <input type="password" placeholder="Enter Password" name="psw" required>
                             </div>
                               <div>
                                   <button type="submit" name="login" onclick="">login</butto>
                              </div>
                                       
                                     
                     </form>

                </div>
                <div>
                    <?php
                     if(isset($_POST['login']))
                     {
                          $username=$_POST['uname'];
                           $password=$_POST['psw'];
                    $select="SELECT  * FROM `permanentcustomer` " ;
                           $que= mysqli_query($con, $select);
                          if(mysqli_num_rows($que)>0)
                               {
                 
                           while($rows= mysqli_fetch_array($que))
                               {
                                    if($username==$rows['username'] && $password==$rows['password'])
                                    {
                                       ?>
                                          <script>
                                              
                                              
                                              location.replace("permanent_order.php");
                                          </script>
                                       <?php   
                                        
                                    }
                                    
                                    else  
                                    {
                                       
                                    }
                                    
                                    
                               }
                           }
                     }     

                    ?>
                    
                </div>
                  
                      
                      
              </div>  
                </div>
                <div class="newfoodbody">
                
                    <div class="imagebody">  
                    <?php
                    
                            $select="SELECT *FROM newfood";
                               $que= mysqli_query($con, $select);
                             if(mysqli_num_rows($que)>0)
                                  {
                 
                                    while($rows= mysqli_fetch_array($que))
                                    {
                                        $string = $rows['price'];
                                         $int  = preg_replace('/[^0-9]/', '', $string);
                                         if($int<50)
                                         {
                                             $int=$int-5;
                                         }
                                         elseif ($int>50 && $int<100 ) 
                                             {
                                                 $int=$int-10;
                                             }
                                          elseif($int>100&&$int<200)
                                          {
                                              $int=$int-15;
                                          }
                                         else 
                                         {
                                             $int=$int-20;
                                         }
                                         ?>
                                       <div class="flot_left">
                                        <div class="single_imagebody">   
                                            <img style="margin-left: 20px;" src="../image/<?php echo $rows['image']  ?>" ><br>
                                            <p style="margin-left: 60px;"class="p1"><?php echo $rows['name']  ?></p>
                                            <p style="margin-left: 60px;"class="p2"><?php echo $int  ?></p>
                                        </div> 
                                          
                                           <form method="post">
                                                  <div class="hide_id">
                                                  <input type="text" name="food_id" value="<?php echo $rows['id'];?>" />
                                                  </div>
                                               <div class="add_to" >
                                               
                                              </div>
                                         </form>  
                                       </div> 
                                          <?php
                                    }
                                  
                                  }
                            ?>        
                </div>
              
            </div>
          </div>    
        </body>
       
</html>   