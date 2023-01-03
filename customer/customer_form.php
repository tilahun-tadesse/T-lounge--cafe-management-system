<?php

include'permanent_customer.php';

?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Form</title>
    
    <link href="aa/regstration_1.css" rel="stylesheet" type="text/css"/>
    <link href="regstration_1.css" rel="stylesheet" type="text/css"/>
    <script src="validat_1.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
      <div class="all">
  	<div class="container">
            <form method="post" autocomplete="on" action="permanent_customer.php">
       
    	  <table>    
               
              <tr style="margin-top: 20px;">    
                    <td><label>First Name: </label></td>    
                    <td>  
                        <div class="name" >
                            
                            <input type=text  id="fname" name="name" style= "width: 200px; "> <i style="display: none; color: green; float: right" <i id="checkf" class="fa fa-check "></i>
                            <i id="fristname">Invalid name given</i> 
                           

                        </div>
                    </td>    
                </tr>    
                <tr style="margin-top: 20px; margin-left: 30px;">    
                    <td><label>Last Name: </label></td>    
                    <td>    
                        <div class="lastname">
                            <input type=text name="lname" id="lname" onclick="namef_click();"style="margin-top:20px; margin-left: 20px; width: 200px;"> <i style="display: none; color: green; float: right" id="checkl" class="fa fa-check "></i>
                            <i id="lastname" >invalid name given</i>
                            
                             
                        <div>
                            
                    </td>    
                </tr>
                <tr style="margin-top: 20px;">    
                    <td><label>student id: </label></td>    
                    <td>    
                        <div class="lastname">
                            <input type=text name="id" id="id" style="margin-top:20px; margin-left: 20px ; width: 200px;" onclick="namel();"> <i style="display: none; color: green; float: right" id="checki" class="fa fa-check "></i>
                            <i id="studid" >invalid name student</i>
                            
                             
                        <div>
                            
                    </td>    
                </tr>
                
                <tr style="margin-left: 20px;">    
                    <td><label>Email Id: </label></td>    
                    <td>    
                        <div class="email">
                            <input id="email_addres" type="text" name="email" placeholder="example@gmail.com" onclick="stud_id();"style="margin-top:20px; margin-left: 20px ; width: 200px;"><i style="display: none; color: green; float: right" id="checke" class="fa fa-check "></i>
                            <i id="email">Invalid email addres</i>
                        </div>
                    </td>    
                </tr>
                 
                     
                <tr>    
                    <td><label>Gender: </label></td>    
                    <td>   
                        <div class="gender">
                            <input type="radio" name="gender" value="male" checked="on" onclick="confirm_click();"style="margin-top: 20px; margin-left: 20px;" >Male    
                            <input type="radio" name="gender" value="femele" onclick="confirm_click();" >Female
                        <div>
                    </td>    
                </tr>    
                  
                <tr>    
                    <td><label>Mobile: </label></td>    
                    <td>  
                        <div class="mobile">
                           <input id="mobile" type="number" name="phone" value=""required="" placeholder="9-333-333-33" style="margin-top:20px; margin-left: 20px; width: 200px;"/> <i style="display: none; color: green; float: right" id="checkm" class="fa fa-check "></i>
                            <i id="phone">maximum 10 digt</i>
                             <i id="numberphone">only number</i>
                            
                        </div>
                    </td>    
                </tr>    
                <tr>    
                <td><label>campus </label></td>    
                    <td> 
                        <div class="building " >
                      <select name='biulding' onclick="phone_click();" style="margin-top:  20px; width: 100px; margin-left: 20px" >    
                            <option value="fasil">fasil</option>    
                            <option value="tedi">ted</option>    
                            <option value="maraci">maraci</option>    
                              
                            
                        </select> 
                  
                            
                            <div>  
                    </td>    
                </tr>    
                    
                    
          </table>
          <div style="margin-top: 50px;">
                 <input type="submit" name="submit" value="signin" style="border-color: blue; margin-left: 150px;border-radius: 10px; width: 150px;">  
          </div>
          </form>
  </div>
 </div>
  </body>
</html>
