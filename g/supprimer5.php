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
  background-color: #71dcda;;
  -webkit-box-shadow: none; 
  -moz-box-shadow: none; 
  box-shadow: none;
  text-align: center;
  margin-left: 170px;
  margin-top: 13px; 
 



}
input[type=text]{
    
    text-align: center;
    
   ; 
  
  
  
  }

        </style>
<html>
 
<link rel="stylesheet" type="text/css" href="css.css">

<div class="box">

  <form   method="POST"  action="supprimer.php">
  <fieldset>
  <h2> suppression</h2>
  <input type="text" name="id" id="id"  value="" placeholder="id" /><br><br>
  <label id="icon" for="name"><i class="icon-user"></label>
  <label id="icon" for="name"><i class="icon-envelope "></label><br>
  <input type="submit" name="supprimer" value="supprimer"> 

</fieldset>
  </form>
</div>
        <!--*** 2éme etape : On va prépare la commande sql de suppression des données depuis notre base dans une variable $sql ***-->
        <?php
           if(isset($_POST['supprimer'])){
            $id=$_POST['id'];
            $password=$_POST['password'];
           $sql ="DELETE FROM `j` WHERE id like '$id' ;";           
         
     if($conn -> query($sql) === TRUE){      //si la suppression avec sucès alors :
        header("Location:affichage4.php") ;//Si le nombre de ligne est > 0 , on sera redirigé vers la page bienvenu
    } else {      //sinon
        header("Location:supprimer5.php") ;//Si le nombre de ligne est > 0 , on sera redirigé vers la page bienvenu
    }
        }
        
            $conn->close();         //Il faut fermer à la fin la connexion avec la méthode close()
            ?>
            </body>

</html>