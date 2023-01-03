<?php
include'homepage.php';
include 'databse.php';
if(isset($_POST['login']))
{
     $username=$_POST['username'];
     $password=$_POST['password'];
     $select="select *from admin_signin";
    $query=  mysqli_query($con, $select);
                             if(mysqli_num_rows($query)>0)
                             {
                                 while ($rows= mysqli_fetch_array($query)) 
                                 {
                                     if($rows['username']==$username&&$password==$rows['password'])
                                     {
                                 ?>
                                          <script>
                                              location.replace("manager.php");
                                          </script>
                                       <?php
                                     }
                           else {
                              ?>
                                          <script>
                                              alert("incorect password or user name")
                                              location.replace("login_page.php");
                                          </script>
                                       <?php
                               }
                                     
                                 }   
                             }
}
?>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
        <script src="login.js" type="text/javascript"></script>
        <script src="reserv/llogin1.js" type="text/javascript"></script>
        <link href="login.css" rel="stylesheet" type="text/css"/>
        
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
                     
                    <div class="form-item">
                        <!-- <label for="userName">Username:</label> -->
                        <input type="text" id="username" style="" name="username" id="userName" placeholder=" new Username ">
                    </div>

                    <div class="form-item">
                        <!-- <label for="passWord">Password:</label> -->
                        <input type="password" id="password" style=""name="password" id="passWord" placeholder=" new Password">
                    </div>
                     
                    <div class="form-btns">
                        
                        <button type="submit"  name="login" id="login">send</button>
                        
                        


                    </div>
                </form>
                
                <p>Copyright &copy; YourCompany.com</p>
            </div>
        </div>
    </div>
    </div>
</body>
</html>


