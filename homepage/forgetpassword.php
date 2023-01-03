<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'homepage.php';
include 'databse.php';
if(isset($_POST['send']))
{
    $email=$_POST['email'];
    $select="select *from admin_signin";
    $query= mysqli_query($con, $select);
    if(mysqli_num_rows($query)>0)
    {
        
                  
        while($rows= mysqli_fetch_array($query))
        {
            if($email==$rows['email'])
            {
                $id=$rows['id'];
                $delete="DELETE FROM `admin_signin` WHERE id=$id";
                 mysqli_query($con, $delete);
                 ?>
                     <script>
                         
                        location.replace("login.php");
                          </script>
                    <?php
            }
            else
            { 
                 ?>
                     <script>
                         alert("incorect email");
                        location.replace("forgetpassword.php");
                          </script>
                    <?php
            }
     
            
        }
    }
}
?>
<html >
<head>
	<meta charset="UTF-8">
	<title></title>
       
        
        <link href="forgetpassword.css" rel="stylesheet" type="text/css"/>
        


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
                     <input style="" type="email" name="email" id="ema" required="" placeholder=" Email">
                    </div>
                   
                    <div class="form-item">
                        <!-- <label for="userName">Username:</label> -->
                        <input type="text" style="display: none;" name="username" id="userName" placeholder=" new Username ">
                    </div>

                    <div class="form-item">
                        <!-- <label for="passWord">Password:</label> -->
                        <input type="password" style="display: none;"name="passWord" id="passWord" placeholder=" new Password">
                    </div>
                     

                    <div class="form-btns">
                        
                        <button type="submit"  name="send" id="send">send</button>
                        <button type="submit"  id="signin" name="signin" style="display: none;" >signin</button>
                        


                    </div>
                </form>
                
                <p>Copyright &copy; YourCompany.com</p>
            </div>
        </div>
    </div>
    </div>

</body>
</html>

