x=prompt("Entre un nombre");
y=prompt("Entre une multiplication");
var carréX= x*x*x
var multiX= x*y

var myImage =new Image(carréX,multiX);
myImage.src= 'papillon.jpg';
document.body.appendChild(myImage);
document.write("<br>"+"Le cube de "+x+ " est égal a "+carréX); 
document.write("<br>"+"Le produit de "+x+" x "+y+ " est égal a "+multiX); 