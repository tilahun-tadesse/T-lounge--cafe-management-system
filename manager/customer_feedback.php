<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'manheader.php';
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
        <link href="customer_feedback.css" rel="stylesheet" type="text/css"/>
        <link href="feedback.css" rel="stylesheet" type="text/css"/>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="col-6">
            <div class="user_feedback">
                     
                   

                     <div class="massege_user">
                       <?php
                         $select="SELECT *FROM user_feeback";
                               $que= mysqli_query($con, $select);
                             if(mysqli_num_rows($que)>0)
                                  {
                 
                                    while($rows= mysqli_fetch_array($que))
                                            
                                       {
                                        
                                         ?>
                                            
                                            <div class="message">
                                            <p><?php echo $rows['text'];?></p>
                                            </div>
                                             <div class="space">
                                              
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
</html>
