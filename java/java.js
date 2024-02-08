
function validFrom1(){
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const nom = document.getElementById('nom').value;
    const prenom = document.getElementById('prenom').value;
    const tel = document.getElementById('tel').value;
    if(email=="" ){
        alert("S'il vous plait vous devez saisir votre email");
        nom.focus();
        return false;
    }     
        if(password=="" ){
            alert("S'il vous plait  vous devez saisir votre mot de passe");
            prenom.focus();
            return false;
        }
if(nom=="" ){
    alert("S'il vous plait vous devez saisir votre nom");
    nom.focus();
    return false;
}     
    if(prenom=="" ){
        alert("S'il vous plait  vous devez saisir votre prenom");
        prenom.focus();
        return false;
    }
    if(tel=="" ){
        alert("S'il vous plait vous devez saisir votre tel");
        tel.focus();
        return false;
    }
    
    if(tel.length !=8){
        document.getElementById('tel').style.borderColor="red";
        return false;
    }

     if(tel.length =8){
        document.getElementById('tel').style.borderColor="green";
        return false;
    }
     
}
    
    
