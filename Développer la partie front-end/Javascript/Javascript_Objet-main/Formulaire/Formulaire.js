 
    let myform= document.getElementById('form1');

    myform.addEventListener('submit', function(e){
        let myentreprise= document.getElementById('entreprise');
        let myconctacter= document.getElementById('contacter');
        let myadresse= document.getElementById('adresse');
        let mycp= document.getElementById('cp');
        let myville= document.getElementById('Ville');
        let mymail= document.getElementById('mail');
        let mytel= document.getElementById('tel');
        let mychoix= document.getElementById('choix');

            //Société
        if (myentreprise.value.trim() == ""){
            alert("Le champs Sociéte est requis");
            e.preventDefault();
        }
            //Personne à contacter
        if (myconctacter.value.trim() == ""){
            alert("Le champs Conctacté est requis");
            e.preventDefault();
        }
            //Adresse de l'entreprise
        if (myadresse.value.trim() == ""){
            alert("Le champs Adresse est requis");
            e.preventDefault();
        }
            //Code Postal
        if (mycp.value.trim() == ""){
            alert("Le champs Code Postal est requis");
            e.preventDefault();
        }
            //Ville
        if (myville.value.trim() == ""){
            alert("Le champs Ville est requis");
            e.preventDefault();
        }
            //E-mail
        if (mymail.value.trim() == ""){
            alert("Le champs E-mail est requis");
            e.preventDefault();
        }
            //Téléphone
            if (mytel.value.trim() == ""){
                alert("Le champs Téléphone est requis");
                e.preventDefault();
            }        
            //Choix
            if (mychoix.value == "Choisissez"){
                let myError= document.getElementById('error');
                myError.innerHTML="Le champs Sélection est incorect";
                myError.style.color= 'red';
                e.preventDefault();
            }              
    })

        