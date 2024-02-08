<?php         
error_reporting(0);

require('crud5.php');
//fonction pour recuperer les données d'un utilisateur depuis formulaire
function getPosts()
{ 
    $posts=array();
    $posts[0]= $_POST['email'];
    $posts[1]= $_POST['password'];
    $posts[2]= $_POST['nom'];
    $posts[3]= $_POST['prenom'];
    $posts[4]= $_POST['tel'];
    $posts[5]= $_POST['datenaissance'];
    $posts[6]= $_POST['ville'];
    $posts[7]= $_POST['genre'];
    $posts[7]= $_POST['dispo'];


    return $posts;
    }
//recherche selon nom de l'utilisateur et remplir le formulaire de modification par ces données s'il existe :
    if (isset($_POST['modifier']))
    {           
        $data = getPosts();
        $search_Query ="SELECT * FROM j where
         email  LIKE '$data[0]' and 
         password  LIKE '$data[1]' ";       
        $search_Result=mysqli_query ($conn,$search_Query);
        if($search_Result)
        {
            
            while($row = mysqli_fetch_array($search_Result))
            {
                $email=$row ['email'];
                $password=$row['password'];
                $nom=$row['nom'];
                $prenom=$row['prenom'];
                $tel=$row['tel'];
                $datenaissance=$row['datenaissance'];
                $ville=$row['ville'];
                $genre=$row['genre'];
                $dispo=$row['dispo'];

            }
        }
        else{
            include('modifier5.php');
        }
       

        $email=$_POST['email'];
        $password=$_POST['password'];
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $tel=$_POST['tel'];
        $datenaissance=$_POST['datenaissance'];
        $ville=$_POST['ville'];
        $genre=$_POST['genre'];
        $dispo=$_POST['dispo'];

        
/*Test sur le bouton "modifier" pour faire la modifiction : */
$sql="UPDATE `j` SET `email`='$email'
,`password`='$password',`nom`='$nom',
`prenom`='$prenom',`tel`='$tel',
`datenaissance`='$datenaissance',`ville`='$ville' ,
`genre`='$genre',`dispo`='$dispo' WHERE `email` like '$email' ";


if($conn->query($sql)===TRUE){
  header("Location:affichage4.php") ;
    
}else{
    header("Location:affichage4.php");
   


}
}
$conn->close();
?>


<html>

    <head>
         <link rel="stylesheet" type="text/css" href="css.css">
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
         <div class="box">
  <form  method="POST"  action="modifier5.php">
  <h1>Modification</h1>

  
  <input type="text" name="email"  value="<?php echo $email;?>"id="name" placeholder="email" />
  <label id="icon" for="name"><i class="icon-user"></label>
    <input type="password" name="password" id="password"  value="<?php echo $password;?>" placeholder="password" />
  <label id="icon" for="name"><i class="icon-shield"></label> 
    <input type="text" name="nom" id="nom"  value="<?php echo $nom;?>"placeholder="nom" />
  <label id="icon" for="name"><i class="icon-shield"></label>
  <input type="text" name="prenom" id="prenom" value="<?php echo $prenom;?>" placeholder="prenom" />
  <label id="icon" for="name"><i class="icon-shield"></label>
    <input type="text" name="tel" id="tel"   value="<?php echo $tel;?>"placeholder="tel" />
    <label id="icon" for="name"><i class="icon-shield"></label> <br> <br>
      <label>Date de naissance :</label>
      <input type="date" name="datenaissance" id="datenaissance"  value="<?php echo $datenaissance;?>" placeholder="datenaissance" />
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
<lebel>Disponible :<label>
<input type="radio"value="oui"name="dispo" checked><label>OUI</label>
<input type="radio"value="non"name="dispo"><label>NON</label>
<br><br>

<input type="submit" name="modifier" value="modifier">               

                   
   
  </form>
</div>
</div>
