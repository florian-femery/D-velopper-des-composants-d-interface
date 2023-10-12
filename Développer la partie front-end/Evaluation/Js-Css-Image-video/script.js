 
    let myform= document.getElementById('form1');

    myform.addEventListener('submit', function(e){
        let myadresse= document.getElementById('adresse');
        let mysujet= document.getElementById('sujet')
        let mymail= document.getElementById('mail');

            //E-mail
        if (mysujet.value.trim() == ""){
            alert("Le Champs Sujet est requis");
            e.preventDefault();
        } 
            //Adresse de l'entreprise
        if (myadresse.value.trim() == ""){
            alert("Le champs Adresse est requis");
            e.preventDefault();
        }
            //E-mail
        if (mymail.value.trim() == ""){
            alert("Le champs E-mail est requis");
            e.preventDefault();
        }         
    })