var nombre= parseInt(prompt("Défini la taille du tableau"));
var K,L,I,J;
var Tableau = [];
for (counter = 0; counter<nombre; counter++){
    var donnée =prompt("Entrée les données");
    Tableau[counter] =donnée;
}


document.write("Avant:");
for(K = 0; K < nombre; K++) document.write(Tableau[K],", ");

for(I = nombre - 2;I >= 0; I--) {
    for(J = 0; J <= I; J++) {
        if(Tableau[J + 1] < Tableau[J]) {
            var t = Tableau[J + 1];
            Tableau[J + 1] = Tableau[J];
            Tableau[J] = t;
        }
    }
}
document.write("<br>Après:");
for(L = 0; L < nombre; L++) {
    document.write(Tableau[L],", ");
}
