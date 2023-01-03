<?php

include'orderfood.php';

?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Form</title>
    
    <link href="order_registration.css" rel="stylesheet" type="text/css"/>
    <link href="order_registration.css" rel="stylesheet" type="text/css"/>
    <script src="order_registration.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
      <div class="all">
  	<div class="container">
            <form method="post" autocomplete="on" action="orderfood.php">
       
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
                            <input type=text name="id" id="id" style="margin-top:20px; margin-left: 20px ; width: 200px;" required="" onclick="namel();"> <i style="display: none; color: green; float: right" id="checki" class="fa fa-check "></i>
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
                    <td><label>Mobile: </label></td>    
                    <td>  
                        <div class="mobile">
                            <input id="mobile" type="number" name="phone" value="" required="" onclick="email_click();" placeholder="9-333-333-33" style="margin-top:20px; margin-left: 20px; width: 200px;"/> <i style="display: none; color: green; float: right" id="checkm" class="fa fa-check "></i>
                            <i id="phone">maximum 10 digt</i>
                             
                        </div>
                    </td>    
                </tr>    
                <tr>    
                <td><label>building </label></td>    
                    <td> 
                        
                      <select name="building" onclick="phone_click();" style="margin-top:  20px; width: 100px; margin-left: 20px" >    
                            <option value="T_31">T_31</option>    
                            <option value="T_32">T_32</option>    
                            <option value="T_33">T_33</option>    
                            <option value="T_34">T_34</option>  
                            <option value="T_35">T_35</option> 
                        </select> 
                      <select name="building" onclick="phone_click();" style="margin-top:  20px; width: 100px; margin-left: 20px" >    
                            <option value="T_21">T_21</option>    
                            <option value="T_22">T_22</option>    
                            <option value="T_23">T_23</option>    
                            <option value="T_24">T_24</option>  
                            <option value="T_25">T_25</option> 
                        </selec
                       
                        
                        
                    </td>    
                </tr>    
                 <tr>    
                    <td><label>dorm </label></td>    
                    <td>  
                        <div class="dorm">
                            
                            <input type="text" id="dorm" name="dorm" value="" required="" width=""style="margin-left: 20px; width: 100px;" />    <i style="display: none; color: green; float: right" id="checkd" class="fa fa-check "></i>
                            <i id="dormi" >invalid dorm number </i>
                        </div>
                    </td>    
                </tr>  
                 <tr style="margin-left: 20px;">    
                    <td><label>Time limit: </label></td>    
                    <td>    
                        <div class="time">
                            <input id="email_addres" type="datetime-local" name="time" onclick="dorm();" placeholder="example@gmail.com" style="margin-top:20px; margin-left: 20px ; width: 200px;"> 
                           
                        </div>
                    </td>    
                </tr>
                    
          </table>
          <div style="margin-top: 50px;">
                 <input type="submit" name="order" value="order" style="border-color: blue; margin-left: 150px;border-radius: 10px; width: 150px;">  
          </div>
          </form>
  </div>
 </div>
  </body>
</html>
