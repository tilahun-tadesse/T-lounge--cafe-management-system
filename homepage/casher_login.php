<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


include'homepage.php';
include 'databse.php';
if(isset($_POST['login']))
  {
    $username=$_POST['username'];
    $password=$_POST['password'];
    
                                     if("abeni"==$username&&"123"==$password)
                                     {
                                          ?>
                                          <script>
                                              location.replace("../casher/header.php");
                                          </script>
                                       <?php

                                     }
                                     else 
                                      {
                                          ?>
                                          <script>
                                              alert("incorect password or user name");
                                              location.replace("cacher_login.php");
                                          </script>
                                       <?php
                                    }
                                
                             
                             
                           
  }
if(isset($_POST['signin']))
    
{
    ?>

<script>
    var password=document.getElementById('password').value;
    var confirm=document.getElementById('confirm').value;
     if(password!==confirm)
     {
          var password=document.getElementById('cicon').style.display='block';
     }
     else
     {
     <?php
        
    $email=$_POST['email'];
    $uername=$_POST['username'];
    $password=$_POST['password'];
    $confirm=$_POST['confirm'];
    $insert="INSERT INTO `admin_signin`(`id`, `email`, `username`, `password`, `confirm`) VALUES ('','$email','$uername','$password','$confirm')";
    mysqli_query($con, $insert);
    
       ?>
         
                                          
                                          
     }
    
</script>
  <?php
  
  ?>
                                          <script>
                                              
                                              location.replace("login.php");
                                          </script>
                                       <?php
  
}
?>


<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
        <script src="login.js" type="text/javascript"></script>
        <script src="reserv/llogin1.js" type="text/javascript"></script>
        <link href="login.css" rel="stylesheet" type="text/css"/>
        <script src="login.js" type="text/javascript"></script>
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<div class="form-box">
            <div class="body-content">

        <div class="container">
            
            <div class="login-form">
                <form method="post" >
                     <div class="form-item " >
                        <!-- <label for="userName">Username:</label> -->
                        <input style="display: none;" type="email" name="email" id="email"  placeholder=" Email">
                    </div>
                   
                    <div class="form-item">
                        <!-- <label for="userName">Username:</label> -->
                        <input type="text" id="username" style="" name="username" id="userName" placeholder=" new Username ">
                    </div>

                    <div class="form-item">
                        <!-- <label for="passWord">Password:</label> -->
                        <input type="password" id="password" style=""name="password" id="passWord" placeholder=" new Password"><i style="display: none ;color: red;" id='checkp' class="fa fa-close" ></i>
                    </div>
                     <div class="form-item">
                        <!-- <label for="passWord">Password:</label> -->
                        <input type="password" id="confirm" onclick="password_click();" style="display: none;"name="confirm" id="passWord" placeholder=" new Password"><i style="display: none ;color: red;" id='checkc' class="fa fa-close" ></i>
                    </div>

                    <div class="form-btns">
                        
                        <button type="submit"  name="login" id="login">login</button>
                        <button type="submit"  id="signin" onclick="confirm_click();" name="signin" style="display: none;" >signin</button>
                        <div class="options">
                            
                             <?php
                             $select="select *from admin_signin";
                           $query=  mysqli_query($con, $select);
                             if(mysqli_num_rows($query)==0)
                             {
                                 ?>
                                 <a onclick="signin();">Sign Up</a>
                                 <?php
                             }
                           
                             ?> 
                                 <a  href="forgetpassword.php" onclick="forget();">Forget Password?</a>
                            
                        </div>


                    </div>
                </form>
                
                <p>Copyright &copy; YourCompany.com</p>
            </div>
        </div>
    </div>
    </div>
</body>
</html>

