<!DOCTYPE html>

    <!-- *** 1ére etape :créer la connexion entre notre formulaire et la base de données *** -->
<?php         
    // Declarer des variable pour stocker les informations de connexion:  
        $servername="localhost:3307";
        $username="root";
        $password="";
        $DBname="projet";           //identifier le nom de notre base de données (data base name)
//création de la connexion:
$conn = mysqli_connect($servername, $username, $password, $DBname);
//test de connection:
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);   //pour afficher c'est quoi l'erreur dans la base s'il existe
}
?> 
<style>

input[type=submit]{
    top: 10px;
  background-color:#6cafc5;
  -webkit-box-shadow: none; 
  -moz-box-shadow: none; 
  box-shadow: none;
  text-align: center;
  margin-left: 170px;
  margin-top: 13px; 



}
        </style>
<html>
 
<link rel="stylesheet" type="text/css" href="css/css_form55.css">
<div  id="mb100">
</div>
<div class="box">
  <h1>Formulaire de suppression</h1>

  <form   method="POST"  action="supprimer.php">
  
  <label id="icon" for="name"><i class="icon-envelope "></label><br>
  <input type="text" name="email" id="name" placeholder="Email" /><br>
  <label id="icon" for="name"><i class="icon-shield"></label><br>
  <input type="password" name="password" id="name" placeholder="Mot de passe" /><br><br>
  <input type="submit" name="supprimer" value="supprimer">


  <a href="http://localhost/ProjetWEB/index.html"  type="submit"class="button">Annuler</a>

  </form>
</div>
        <!--*** 2éme etape : On va prépare la commande sql de suppression des données depuis notre base dans une variable $sql ***-->
        <?php
           if(isset($_POST['supprimer'])){
            $email=$_POST['email'];
            $password=$_POST['password'];
           $sql ="DELETE FROM `inscrit` WHERE email like '$email' and password like '$password';";           
         
     if($conn -> query($sql) === TRUE){      //si la suppression avec sucès alors :
        header("Location:verif.php") ;//Si le nombre de ligne est > 0 , on sera redirigé vers la page bienvenu
    } else {      //sinon
        header("Location:supprimer.php") ;//Si le nombre de ligne est > 0 , on sera redirigé vers la page bienvenu
    }
        }
        
            $conn->close();         //Il faut fermer à la fin la connexion avec la méthode close()
            ?>
            </body>

</html>