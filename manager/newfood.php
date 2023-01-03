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
if(isset($_POST['upload'])) {
//declaring variables
    $name=$_POST['name'];
    $price=$_POST['price'];
    $catagoriy=$_POST['category'];
    $home=$_POST['special'];
    $imagename=$_FILES['file']['name'];
    $imagetmp=$_FILES['file']['tmp_name'];
    $tagetpath="image/".$imagename;
    if(move_uploaded_file($imagetmp, $tagetpath))
    {
        $sql="INSERT INTO newfood VALUES('','$name','$imagename','$price','$home','$catagoriy')";
        $result= mysqli_query($con,$sql);
    }
    

}

/*
 * 
 */

 include 'manheader.php'; 
?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="newfood.css" rel="stylesheet" type="text/css"/>
        <link href="manager.css" rel="stylesheet" type="text/css"/>
        <script src="admin.js" type="text/javascript"></script>
         <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <script src="admin.js" type="text/javascript"></script>
    </head>
    
        <body>

      <div class="col-6">
          <div class="mainbody">
              <div class="button_add">
                <button type="button" name="button" onclick="change()">ADD</button>
                
            </div>
            <div id="add">
                <div class="addfood">
                <form class="" method="post" enctype="multipart/form-data">
                    <h4> ADD NEW FOOD</h4>
                    <p class="p2"> Food name:</p>
                    <input type="text" name="name" value="" /> <br>
                    <P>Price:</p><br>
                    <input type="text" name="price" value="" /><br>
                    <p>Category</p>
                    <select name="category">
                        <option>የሶም</option>
                        <option>የፍስግ</option>
                    </select>
                    <label class="">homespecial</label></br>
                    <label>Yes</label><input style="width:20px; margin-left: 20px;  " type="radio" name="special" value="yes" /><label>no</label> <input style="width:20px; margin-left: 20px;" type="radio" checked="" name="special" value="no" />
                   
                    <p>Image:</p><br>
                    <input type="file" name="file" accept=".jpg, .jpeg ,.png" ><br>
                    <input class="submitimage" type="submit" value="upload" name="upload" />
                    
                </form>
               </div>
            </div>
          <div class="foodimage">
              <?php
              $conn= new mysqli($host, $user, $password, $database);
              if(isset($_POST['delete']))
             {
              $id=$_POST['id1'];
              $delete="DELETE FROM `newfood` WHERE id=$id";
              $conn->query($delete);

            }
               if(isset($_POST['update']))
                   {
                       $name=$_POST['name1'];
                       $price=$_POST['price1'];
                       $id=$_POST['id1'];
                  $sql="UPDATE newfood set name='$name' , price='$price' where id=$id";
                   $con->query($sql);
                  
                   }
              $select="SELECT *FROM newfood ";
              $que= mysqli_query($con, $select);
              if(mysqli_num_rows($que)>0)
              {
                 
                  while($rows= mysqli_fetch_array($que))
                  {
                      ?>
              
              <div class="singleimage"> 
                  <img  src="image/<?php echo $rows['image']  ?>" width="200px"><br>
                  
                  <?php
                  
                  ?>
                  <form method="POST">
                      <div class="new_food_input">   
                      <label>Name:</label><input class="name"  type="text" name="name1" value="<?php echo $rows['name']?>" /><br>
                      <label>Price:</label><input type="text" name="price1" value="<?php echo $rows['price']?>" />
                      <input class="inputid" type="text" name="id1" value="<?php echo $rows['id']?>"/>
                    </div>
                  <div class="updatedelete">
                     
                      <input  style="margin-left: 30px;" type="submit" value="update" name="update"  />
                      <input style="border-color: red; margin-left: 70px; " type="submit" value="delete" name="delete" />
                          
                  </div>  
                              
                      </form>
                  </div>
              
                      <?php
                  }
              }
              
          ?>   
            
              <div class="homespecial">
                  
                  <?php
                  $yes="yes";
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
              
              <div class="singleimage"> 
                  <img  src="image/<?php echo $rows['image']  ?>" width="200px"><br>
                  
                  <?php
                  
                  ?>
                  <form method="POST">
                      <div class="new_food_input">   
                      <label>Name:</label><input class="name"  type="text" name="name1" value="<?php echo $rows['name']?>" /><br>
                      <label>Price:</label><input type="text" name="price1" value="<?php echo $rows['price']?>" />
                      <input class="inputid" type="text" name="id1" value="<?php echo $rows['id']?>"/>
                    </div>
                  <div class="updatedelete">
                     
                      <input  style="margin-left: 30px;" type="submit" value="update" name="update"  />
                      <input style="border-color: red; margin-left: 70px; " type="submit" value="delete" name="delete" />
                          
                  </div>  
                              
                      </form>
                  </div>
              
                      <?php
                  }
              
              } 
          ?>   
            
                  
              </div>
              
              <div>
                  
              </div>
         </div>
              
        </div>
      </div>   
      
        </body>
    
</html>
