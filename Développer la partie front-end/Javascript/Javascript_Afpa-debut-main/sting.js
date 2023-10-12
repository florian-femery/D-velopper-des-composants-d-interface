var str1 =prompt("Entre votre phrase");
var str2=";";
document.write("<br>"+"votre phrase : "+str2+str1+str2); 
st1=prompt("premier nombre pour la sélection");
st2=prompt("nombre de fin de selection");

var strtok =str1.substr(st1,st2);
document.write("<hr><br>"+"votre résulta : "+strtok); 
