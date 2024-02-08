
 
   
    <link rel="stylesheet" type="text/css" href="css.css">
<div class="box">
  <fieldset>
  <h2>Ajouter</h2>
  <form  method="POST"  action="crud.php">
                <a href="index.php" class="Btn_add"> <img src="images/retour.png"> Retour</a>

  
  <input type="text" name="email" id="name" placeholder="Email" /><br><br>
  <label id="icon" for="name"><i class="icon-user"></label>
    <input type="password" name="password" id="name" placeholder="Mot de passe" /><br><br>
  <label id="icon" for="name"><i class="icon-shield"></label> 
    <input type="text" name="nom" id="name" placeholder="Nom" /><br><br>
  <label id="icon" for="name"><i class="icon-shield"></label>
  <input type="text" name="prenom" id="name" placeholder="Prenom" /><br><br>
  <label id="icon" for="name"><i class="icon-shield"></label>
    <input type="text" name="tel" id="name" placeholder="Tel" /><br><br>
    <label id="icon" for="name"><i class="icon-shield"></label> <br> <br>
      <label>Date de naissance :</label>
      <input type="date" name="datenaissance" id="name" placeholder="Date" /><br><br>
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
<fieldset>
       
    <label>Votre Photo:</label>
    <input type="file" name="cv" >
    </fieldset>   
    <br><br>
    <button type="submit"  name="inscrire">S'inscrire</button>
  </fieldset>
  </form>
</div>
</div>
