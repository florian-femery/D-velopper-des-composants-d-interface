var tableau =[];
counter =-1;
while (donnée != 0) {
    counter++;
    var donnée= prompt("Entrée les données\n Entre 0 pour quitez le tableau");
    tableau[counter] =donnée;
}
alert("["+tableau+"]");
console.log(counter);