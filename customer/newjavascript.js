/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * window.open('orderfood.php',"_self");
 */


function display1()
{
   var x= document.getElementById('mytext').value;
   var y=document.getElementById('order_quantity').value;
   
   var z=Number(x);
   var w=Number(y);
   var v=z+w;
   document.getElementById('order_quantity').value=v; 
   document.getElementById('number_food').value=v; 
   var num=Number(document.getElementById('price_input').value);
   var pro=num*v;
   document.getElementById('price_imput').value=pro;
   document.getElementById('shadow_background').style.display='none';
    window.open("orderfood.php","_self");
    
   
}

function add()
{

  var x= document.getElementById('quantity').value;
  
  var y=Number(x);
 var z = y+1;
    document.getElementById('quantity').value=z;
    
}
function sub()
{
    var x= document.getElementById('quantity').value;
     if(x==0)
     {
        var x= document.getElementById('quntity').value=x;
     }
else
{
  x=x-1;

     
    document.getElementById('quantity').value=x;
    }
}
function add()
{
     document.getElementById('shadow_background').style.display='block';
     
}
