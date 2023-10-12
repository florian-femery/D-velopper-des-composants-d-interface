var tableau =[];
    var nombre= parseInt(prompt("Défini la taille du tableau"));

    for (counter = 0; counter<nombre; counter++){
        var donnée =prompt("Entrée les données");
        tableau[counter] =donnée;
    }
alert("["+tableau+"]");