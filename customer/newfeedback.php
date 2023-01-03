<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$host="localhost";
$user="root";
$password="";
$database="project";
$con= mysqli_connect($host, $user, $password, $database);
if(isset($_POST['send']))
             { 
                             
                            
 $text1=$_POST['textarea'];
  $text = nl2br($text1);
 $sql= sprintf("INSERT INTO user_feeback(text) VALUES('%s')",$text);
  mysqli_query($con,$sql);
     
               }
                        
 include 'custheader.php';
 include 'databse.php';
   ?>
<script>
    function scrollToBottom() 
    {
        window.scrollTo(0, document.body.scrollHeight);
    }
    history.scrollRestoration = "manual";
    window.onload = scrollToBottom;
</script>

 <?php
?>
<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="customer.css" rel="stylesheet" type="text/css"/>
        <link href="reserver/newfeedbakc.css" rel="stylesheet" type="text/css"/>
        
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="col-6">
            <div class="user_feedback">
               <div class="search_txet">
                <form method="post">
                    <textarea cols="50" rows="2" name="textarea" autofocus="" style="width: 85%;"></textarea> 
                    <button type="submit" name="send" style="width: 60px; height: 30px; "  <i class="fa fa-send-o"></button>
                </form>
                </div>  
                <div>  
                <?php
                         $select="SELECT *FROM user_feeback";
                               $que= mysqli_query($con, $select);
                             if(mysqli_num_rows($que)>0)
                                  {
                 
                                    while($rows= mysqli_fetch_array($que))
                                            
                                       {
                                        
                                         ?>
                                         <div class="space">
                                            <div class="space">
                                              
                                            </div>
                                            <div class="message">
                                            <p><?php echo $rows['text'];?></p>
                                            </div>
                                         </div>
                                           <br/> 
                                         <?php
                                       }
                                  }
                                ?>  
                </div>                    
                   </div>
         </div>
    </body>