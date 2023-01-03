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
function stud_id()
{
    if(4>2)
    {
    document.getElementById("id").style.borderColor='green';
     document.getElementById("checki").style.display='block';
   }

}

function user_click()
{
   var user=  document.getElementById("user_name").value;
   if(user.length>10)
   {
       document.getElementById("user_name").style.borderColor='red';
     document.getElementById("username").style.display='block';
   }
   else if(user=="")
   {
       document.getElementById("user_name").style.borderColor='red';
     document.getElementById("username").style.display='block';

   }
   else
   {
       document.getElementById("user_name").style.borderColor='green';
       document.getElementById("username").style.display='none';
        document.getElementById("checku").style.display='block';
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
function password_button()
{
    var password= document.getElementById("passwordinput").value;
    if(password.length>8)
    {
         document.getElementById("passwordinput").style.borderColor='red';
        document.getElementById("password").style.display='block';
    }
    else if(password=="")
    {
         document.getElementById("passwordinput").style.borderColor='red';
         document.getElementById("password").style.display='block';
    }
   
  else  if(!password.match(/^\d+/))
      {
          document.getElementById("passwordinput").style.borderColor='red';
          document.getElementById("numberpasword").style.display='block';
           
    }
      
    else
    {
         document.getElementById("passwordinput").style.borderColor='green';
         document.getElementById("password").style.display='none';
         document.getElementById("checkp").style.display='block';
         document.getElementById("numberpasword").style.display='none';
    }
    
}

function confirm_button()
{
     var password= document.getElementById("passwordinput").value;
      var confirm= document.getElementById("confirm").value;
     
       if(password!=confirm)
      {
           document.getElementById("confirm").style.borderColor='red';
          document.getElementById("confirmpassword").style.display='block';
      }
      else
      {
          document.getElementById("confirmpassword").style.display='none';
          document.getElementById("checkc").style.display='block';
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