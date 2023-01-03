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
function add()
{

  var x= document.getElementById('quantity').value;
  
  var y=Number(x);
 var z = y+1;
    document.getElementById('quantity').value=z;
    
     document.getElementById('text').value=z;
     
}
function sub()
{
    var x= document.getElementById('quantity').value;
     if(x==0)
     {
        var x= document.getElementById('quntity').value=x;
         document.getElementById('text').value=x;
     }
else
{
  x=x-1;

     
    document.getElementById('quantity').value=x;
     document.getElementById('text').value=x;
    }
    }
    
