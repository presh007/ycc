window.onload=function(){ 

 function querySt(username) {

 hu = window.location.search.substring(1); 
 gy = hu.split("&");

for (i=0;i<gy.length;i++) { 
ft = gy[i].split("="); 
if (ft[0] == username) { 
 return ft[1]; 
 } 
 } 
 } 
 var username = querySt("username");


 if( username==null){ 
 }else{ 
 document.getElementById('emailid').value = username; 
 } 
 } 