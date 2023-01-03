<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();





$host="localhost";
$user="root";
$password="";
$database="project";
$con= mysqli_connect($host, $user, $password, $database);
if(!isset($_SESSION['price']))
{
    $_SESSION['price']="0";
}
if(!isset($_SESSION['quantity']))
{
    
    $_SESSION['quantity']="0";
   
}
if(!isset($_SESSION['cart']))
{
    $_SESSION['cart']=array(array("name"=>"","price"=>"","quantity"=>""));
}

if(isset($_POST['add_cart']))
{    
    
    $foodname=$_POST['foodname'];
    $foodprice=$_POST['foodprice'];
    $foodquantity=$_POST['quantity'];
   
$b=array("name"=>"$foodname","price"=>$foodprice,"quantity"=>$foodquantity);
array_push($_SESSION['cart'],$b);
$mulit=(int)filter_var($foodquantity, FILTER_SANITIZE_NUMBER_INT);
   $num = (int)filter_var($foodprice, FILTER_SANITIZE_NUMBER_INT);
   $pro=$mulit*$num;
   $_SESSION['price']=$_SESSION['price']+$pro;
   
$_SESSION['quantity']=$_SESSION['quantity']+1;

}
 
 

if(isset($_POST['remove_cart']))
{
   ?>
<script>
    var del=confirm("Are you sure you want to delete this ");
    if (del==true)
    {
        
        window.location.href="orderfood.php";
        <?php
        $foodname=$_POST['foodname'];
    $foodprice=$_POST['foodprice'];
    $foodquantity=$_POST['foodquantity'];
    
    
    $b=array("name"=>$foodname,"price"=>$foodprice,"quantity"=>"(".$foodquantity).")";
    $delete=array_splice($_SESSION['cart'], array_search($b, $_SESSION['cart']), 1);
    unset($delete);
    $mulit=(int)filter_var($foodquantity, FILTER_SANITIZE_NUMBER_INT);
   $num = (int)filter_var($foodprice, FILTER_SANITIZE_NUMBER_INT);
   $pro=$mulit*$num;

    $_SESSION['price']=$_SESSION['price']-$pro;
    $_SESSION['quantity']=$_SESSION['quantity'];
      ?>
    }
    else
    {
        window.location.href="orderfood.php";
    }
 </script>
<?php





$_SESSION['quantity']=$_SESSION['quantity']-1;
$mulit=(int)filter_var($foodquantity, FILTER_SANITIZE_NUMBER_INT);
   $num = (int)filter_var($foodprice, FILTER_SANITIZE_NUMBER_INT);
   $pro=$mulit*$num;
   $_SESSION['price']=$_SESSION['price']-$pro;
        
   
}
if(isset($_POST['order']))
{
    
    $sumArray = array("name"=>"","price"=>"","quantity"=>"");
    foreach ($_SESSION['cart'] as $k=>$subArray) {
  foreach ($subArray as $name=>$value) {
    $sumArray[$name].=$value;
  }
}

$submitname=($sumArray['name']);
$submitprice=($sumArray['price']);
$submitquantity=($sumArray['quantity']);


    $fname=$_POST['name'];
    $lname=$_POST['lname'];
    $id=$_POST['id'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $building=$_POST['building']."(".$_POST['dorm'].")";
    $timelimit=$_POST['time'];
    $totalprice=$_SESSION['price'];
 
    
    $insert="INSERT INTO `userorder`(`id`, `studentid`, `firstname`, `lastname`,"
            . " `email`, `phone`, `building`, `orderstart`, `lasttime`, `foodname`, "
            . "`totalprice`, `quantity`) VALUES ('','$id','$fname','$lname',"
            . "'$email','$phone','$building','','$timelimit','$submitname','$totalprice',"
            . "'$submitquantity')";
    
    $result= mysqli_query($con,$insert);
    $select="SELECT  `quantity` FROM `permanentcustomer` WHERE s";
     echo '<script language="javascript">alert(" successfuly orderd your food");</script>';
     
    session_unset();
    if(!isset($_SESSION['quantity']))
     {
    
    $_SESSION['quantity']="0";
    
   }
    
}

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

}



?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="reserver/permanent _order.css" rel="stylesheet" type="text/css"/>
        <script src="permanent_order.js" type="text/javascript"></script>
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    </head>
    
        <body>
          <div class="col-6">
            <div>
                <div id="cartmenu" class="cartmenu">
                    <div class="cartlable">
                        <form method="post" action ="order_regitsration.php">
                        <span id="cartmenuspan"><?php echo $_SESSION['quantity']?></span><label>Cart<i class="fas fa-shopping-cart"></i></label><input type="submit" value="ORDER" name="submit"/> 
                        </form>
                    </div>
                </div> 
                 
               
                
                <div>
                    <?php
                     if(isset($_POST['login']))
                     {
                          $username=$_POST['uname'];
                           $password=$_POST['psw'];
                    $select="SELECT  uesrname ,password FROM permanentcustomer ";
                           $que= mysqli_query($con, $select);
                          if(mysqli_num_rows($que)>0)
                               {
                 
                           while($rows= mysqli_fetch_array($que))
                               {
                                   
                                    if($username==$rows['username']&& $password=$rows['password'])
                                    {
                                        
                                    }
                                    
                               }
                           }
                     }     

                    ?>
                    
                </div>
               
                <div>
                 <?php
                     if(isset($_POST['add']))
                              
                          { 
                            ?>
                       <div id="shadow_background" class="shadow_background">
                            <div class="food_cart_quantity">
                              <?php 
                            
                           $id=$_POST['food_id'];  
                           $select="SELECT *FROM newfood where id=$id";
                           $que= mysqli_query($con, $select);
                            if(mysqli_num_rows($que)>0)
                                  {
                 
                                    while($rows= mysqli_fetch_array($que))
                                        {
                                        
                                        ?>
                                <div class="food_image">
                                     <img  src="../image/<?php echo $rows['image']  ?> " ><br>
                                </div>
                                        <div>
                                            <div class="food_quantity_input"> 
                                                <div class="number_of_food"> 
                                                   
                                                 <input type="submit" value="-" name="minuse" onclick="sub()" />
                                                <input  id ="quantity" type="text" name="quantity" value="0" />
                                                <input type="submit" value="+" name="add" onclick="add()" />
                                                </div>
                                             
                                                <div class="order_food">
                                                    <form method="post" > 
                                                              
                                                <input  type="submit" name="add_cart" value="add"/>
                                                <input type="submit" value="remove" name="remove_cart" style="border-color: red; position: absolute;margin-left: 40px " />
                                                    
                                                  <div class="hidden_input">
                                                      <input type="text" name="foodname" value="(<?php echo $rows['name']  ?>)" />
                                                      <input type="text" name="foodprice" value="<?php echo $rows['price']?>" />
                                                      <input id="text" type="text" name="quantity" value="0" />
                                                  </div>
                                                      </form>  
                                              </div>
                                        </div>
                                         <?php
                                        }
                                        
                                  }  
                                  ?>                                                  

                            </div>
                       </div>
                           <?php  
                          }
                     ?>
                      
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
                                              <div class="add_to">
                                               <input type="submit" style="width: 100px;"value="add" name="add"  />
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
