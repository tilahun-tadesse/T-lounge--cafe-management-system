/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function signin()
{
    
    document.getElementById('email').style.display='block';
     document.getElementById('confirm').style.display='block';
      document.getElementById('signin').style.display='block';
        document.getElementById('login').style.display='none';
        var confirm= document.getElementById("confirm").value;
     if(!confirm.match(/^\d+/))
      {
         
          
          document.getElementById("checkc").style.display='block';
           
    } 
    else
    {
        document.getElementById("checkc").style.display='none';
    }
}
function forget()
{
    document.getElementById('singin').style.display='block';
}
function check()
{
     var password= document.getElementById("password").value;
      var confirm= document.getElementById("confirm").value;
    if(password!==confirm)
    {
     document.getElementById('cicon').style.display='block';
    }
    else
    {
         document.getElementById('cicon').style.display='none';
    }
    
}
function password_button()
{
    var password= document.getElementById("password").value;
    if(password.length>8)
    {
         document.getElementById('picon').style.display='block';
        
    }
    else
    {
        document.getElementById('picon').style.display='none';
    }
 }  
function show_password()
{
   
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }

}