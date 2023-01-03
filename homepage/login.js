/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function forget()
{
    window.open('forgetpassword.php', '_self');
}
function password_click()
{
     var password= document.getElementById("password").value;
     if(!password.match(/^\d+/))
      {
         
          
          document.getElementById("checkp").style.display='block';
          
           
    }
    else
    {
        document.getElementById("checkp").style.display='none';
    }
}
function confirm_click()
{
   if(!confirm.match(/^\d+/))
      {
         
          
          document.getElementById("checkc").style.display='block';
           
    } 
    else
    {
        document.getElementById("checkc").style.display='none';
    }
}
