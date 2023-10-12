//Début
console.log("La 2nde zone de texte a pour nom : ");
console.log(document.forms['form1'].elements[1].name);

console.log("La 1ére zone de texte a pour valeur : ")
console.log(document.forms['form1'].elements['nom'].value);

console.log("Le bouton Submit a pour identifiant unique : ");
console.log(document.getElementById('idSubForm1').id);
console.log("Le bouton Submit a pour valeur : ");
console.log(document.getElementsByName('subForm1')[0].value);
console.log("");

//2eme function
function testerRadio(){
    var radio=document.getElementsByName("btnRadChoix");
        for (var i=0; i<radio.length;i++){
            if (radio[i].checked){
                document.getElementById("txtBox1").value =radio[i].value;
            }
        }
}

//3eme fonction
var version =navigator.appVersion;

console.log("Le code de votre browser est :" +navigator.appCodeName);
console.log("Le nom ou la marque du browser est :" +navigator.appName);
console.log("Les information sur la versiont sont :" +version);
console.log("Le browser a comme user-agent : " +navigator.userAgent);
console.log("");

if (version.indexOf('Win') > -1){ 
        console.log("<br />Vous etes sous l'environnement Windows");
        console.log("<br />");
    }

if (navigator.userAgent.indexOf('Firefox') > -1){ 
        console.log("Vous utilisez un navigateur FireFox");
    }else if (version.indexOf('Chrome') > -1){ 
            console.log("Vous utilisez un navigateur Chrome");
        }else if (version.indexOf('MSIE') > -1){ 
                console.log("Vous utilisez un navigateur Microsoft Internet Explorer");
            }else{
                    console.log("Vous utilisez un navigateur inconnu");
                }