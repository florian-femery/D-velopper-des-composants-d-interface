var nom = window.prompt("Saisissez votre nom");
var prenom = window.prompt("Saisissez votre prenom");

var sexe
if (window.confirm("Etes-vous un homme ?") == true) 
{ 
   sexe=("Monsieur")
}else{
    sexe=("Madame")
}

alert("Bonjour "+sexe +nom +prenom +"\nBienvenu sur notre site web !");