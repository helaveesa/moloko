// JavaScript Document
function locateObject(name, d) 
{ 
var i,x; 
if(!d) d=document; 
x=d[name]; 
for(i=0; !x && d.layers && i< d.layers.length; i++) 
x=locateObject(name, d.layers[i].document); 
return x; 
} 
function ImageSwap( Name, URL) 
{ 
var img; 
img = locateObject(Name); 
img.src = URL; 
} 