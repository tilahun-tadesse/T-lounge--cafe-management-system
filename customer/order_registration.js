/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function namef_click()
{


var regName = "";
var name = document.getElementById('fname').value;

   if (/[^a-zA-Z]/.test(name))
   { 
         document.getElementById("fname").style.borderColor='red';
        document.getElementById("fristname").style.display='block';
   }

 else if(name=="")
 {
     document.getElementById("fname").style.borderColor='red';
        document.getElementById("fristname").style.display='block';
 }
else
{
     document.getElementById("fname").style.borderColor='green';
    document.getElementById("checkf").style.display='block';    
    document.getElementById("fristname").style.display='none';
     
}
 
}

function namel()
{

 
var regName = /^[a-zA-Z]+$/;
var name = document.getElementById('lname').value;
if (/[^a-zA-Z]/.test(name))
{
    document.getElementById("lname").style.borderColor='red';
    document.getElementById("lastname").style.display='block';
    document.getElementById("lastname").style.borderColor='red';
     
}
else if(name=="")
{
    document.getElementById("lname").style.borderColor='red';
    document.getElementById("lastname").style.display='block';
}
else
{     document.getElementById("lname").style.borderColor='green';
     document.getElementById("checkl").style.display='block';
     document.getElementById("lastname").style.display='none';
     
     
 }
}




function email_click()
{
    var test=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var match= /^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$/;
    var email= document.getElementById("email_addres").value;
    if(!test.test(email))
    {
        document.getElementById("email_addres").style.borderColor='red';
        document.getElementById("email").style.display='block';
    }
    else
    {
       document.getElementById("email_addres").style.borderColor='green';
         document.getElementById("email").style.display='none';
         document.getElementById("checke").style.display='block';
    }
    
}

function phone_click()
{
    
    var phone= document.getElementById("mobile").value;
    if(phone.length>10)
      {
           document.getElementById("mobile").style.borderColor='red';
           document.getElementById("phone").style.display='block';
      }
   
      else
      {
          document.getElementById("mobile").style.borderColor='green';
          document.getElementById("phone").style.display='none';
          document.getElementById("checkp").style.display='block';
      }
      
}

function dorm()
{
    var dorm= document.getElementById("dorm").value;
    if(!/^[0-9]$/.test(dorm))
      {
          document.getElementById("dorm").style.borderColor='red';
          document.getElementById("dormi").style.display='block';
           
    }
   
    else if(dorm=="")
    {
         document.getElementById("dorm").style.borderColor='red';
         document.getElementById("dormi").style.display='block';
    }
     else 
    {
        document.getElementById("dorm").style.borderColor='green';
        document.getElementById("dormi").style.display='none';
        document.getElementById("checkd").style.display='block';
    }
   
    
}
