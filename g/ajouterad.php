
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Gestion Employés</title>
          <link rel="stylesheet" type="text/css" href="css.css">
 <div class="box">
   <h1>Inscription</h1>
 
   <form  method="POST"  action="crudad.php">
   
   <input type="text" name="email" id="name" placeholder="Email" />
   <label id="icon" for="name"><i class="icon-user"></label>
     <input type="password" name="password" id="name" placeholder="Mot de passe" />
   <label id="icon" for="name"><i class="icon-shield"></label> 
     <input type="text" name="nom" id="name" placeholder="Nom" />
   <label id="icon" for="name"><i class="icon-shield"></label>
   <input type="text" name="prenom" id="name" placeholder="Prenom" />
   <label id="icon" for="name"><i class="icon-shield"></label>
     <input type="text" name="tel" id="name" placeholder="Tel" />
     <label id="icon" for="name"><i class="icon-shield"></label> <br> <br>
       <label>Date de naissance :</label>
       <input type="date" name="datenaissance" id="name" placeholder="Date" />
   <br><br>
   <label>Ville :</label>
   <input type="radio"value="sfax"name="ville" checked><label>Sfax</label>
   <input type="radio"value="gabes"name="ville"><label>Gabes</label>
   <input type="radio"value="sousse"name="ville"><label>Sousse</label>
   <input type="radio"value="tunis"name="ville"><label>Tunis</label>
 
 <br><br>
 <label>Sexe :</label>
 <input type="radio"value="femme"name="genre" checked><label>Femme</label>
 <input type="radio"value="homme"name="genre"><label>Homme</label>
 <br><br>
   <label>postes :</label>
   <input type="radio"value="directeur"name="post" checked><label>directeur</label>
   <input type="radio"value="comptable"name="post"><label> Comptable</label>
   <input type="radio"value="Ressources"name="post"><label>Ressources humaines</label>
   <input type="radio"value="marketing"name="post"><label>marketing</label>
   <input type="radio"value="developpeur"name="post"><label>developpeur</label>

 <fieldset>
        
     <label>Votre Photo:</label>
     <input type="file" name="cv" >
     </fieldset>   
     <button type="submit"  name="inscrire">S'inscrire</button>
    
   </form>
 </div>
 </div>
 