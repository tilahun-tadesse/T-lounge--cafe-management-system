<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'header.php';
include 'databse.php';
?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="header.css" rel="stylesheet" type="text/css"/>
         <link href="aa/permanent_customer.css" rel="stylesheet" type="text/css"/>
         <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <script src="admin.js" type="text/javascript"></script>
        <script src="aa/permanent_customer.js" type="text/javascript"></script>
    </head>
    
        <body>
          <div class="col-6">
            <div>
                <div> 
            <form method="post">
               <div class="search">
                   <span class="text">
                      
                      <input type="text" name="id" value="" placeholder="student id"/>
                   </span>  
                      <span class="submit" >
                      <input type="submit" value="Search" name="search" />
                      </span>
                </div>
                   
                   
                    
                </form>
                    <div>
                         <?php
                     if(isset($_POST['search']))
                     {
                        $id=$_POST['id']; 
                          
                    $select="SELECT  * FROM `permanentcustomer`where id=$id";
                           $que= mysqli_query($con, $select);
                          if(mysqli_num_rows($que)>0)
                               {
                 
                           while($rows= mysqli_fetch_array($que))
                               {
                                   
                                    $username=$rows['username'];
                                    $password==$rows['password'];
                                    ?>
                     <div id="hidden_form_1" class="hidden_form">
                        <form action="permanent_customer.php">
                            <div class="container_form">
                               <label for="uname"><b>Username</b></label>
                               <input type="text" placeholder="Enter Username"  value="<?php $username?>"name="uname" required>

                                <label for="psw"><b>Password</b></label>
                                 <input type="password" placeholder="Enter Password" value="<?php $password?>"name="psw" required>
                             </div>
                               <div>
                                   <button type="submit" name="login" onclick="">login</butto>
                              </div>
                        </form>  
                                       
                                     
                    </div>
                                     <?php 
                                   
                                    
                               }
                          
                               }
                         else {
                               echo '<script language="javascript">alert(" incorect student id");</script>';
                                 echo "<script>document.location = 'permanent_customer.php'</script>";
                              }   
                               
                                    
                                 
                         
                     }     

                    ?>
                    </div>
                </div>
                     <div>
                         <?php
                         if(isset($_POST['search']))
                         {
                         $select="SELECT *FROM newfood";
                               $que= mysqli_query($con, $select);
                             if(mysqli_num_rows($que)>0)
                                  {
                 
                                    while($rows= mysqli_fetch_array($que))
                                    {
                                        $id=$_POST['id'];
                                        if($id==$rows['id'])
                                        {
                                           ?> 
                                           <div>
                                                 <div  style="display: block" class="status">
                                                 <label>Student id</label><span></span>
                                                 <label>Full name</label><span></span>
                                                 <label>Service Day</label><span></span>
                                                 <label>Your money left</label><span></span>
                                            </div>
                                        </div>
                             
                                            <?php
                                        }
                                    }
                                  } 
                         }   
                         ?>
                     </div>
                 </form>   
                </div>
                <div >
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
                                        <div class="single_imagebody">   
                                            <img style="margin-left: 20px;" src="../image/<?php echo $rows['image']  ?>" ><br>
                                            <p style="margin-left: 60px;"class="p1"><?php echo $rows['name']  ?></p>
                                            <p style="margin-left: 60px;"class="p2"><?php echo $int  ?></p>
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