<?php         
error_reporting(0);

require('crud3.php');
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
        $search_Query ="SELECT * FROM ch where
         email  LIKE '$data[0]' and 
         password  LIKE '$data[1]' ";       
        $search_Result=mysqli_query ($conn,$search_Query);
        if($search_Result)
        {
            
            while($row = mysqli_fetch_array($search_Result))
            {
                $email=$row ['email'];
                $dispo=$row['dispo'];

            }
        }
        else{
            include('modifier3.php');
        }
       

        $email=$_POST['email'];
        $password=$_POST['password'];
        $dispo=$_POST['dispo'];

        
/*Test sur le bouton "modifier" pour faire la modifiction : */
$sql="UPDATE `ch` SET `email`='$email'
,`password`='$password',`dispo`='$dispo' WHERE `email` like '$email' ";

if($conn->query($sql)===TRUE){
  header("Location:aller2.html") ;
    
}else{
    header("Location:aller2.html");
   
   }
}
$conn->close();
?>


<html>

    <head>
         <link rel="stylesheet" type="text/css" href="css/css_form2.css">
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
  <form  method="POST"  action="modifier3.php">
  <h1>Modification</h1>

  <fieldset>
  <input type="text" name="email"  value="<?php echo $email;?>"id="name" placeholder="email" />
  <label id="icon" for="name"><i class="icon-user"></label><br><br>
    <input type="password" name="password" id="password"  value="<?php echo $password;?>" placeholder="password" />
    <label id="icon" for="name"><i class="icon-user"></label>

<h4>Vous êtes disponible ?<h4>
<input type="radio"value="oui"name="dispo" checked><label>OUI</label>
<input type="radio"value="non"name="dispo"><label>NON</label>
<br><br>

<input type="submit" name="modifier" value="modifier">               
<a href="http://localhost/ProjetWEB/aller2.html"  type="submit"class="button">Annuler</a>

                   
   
  </form>
</div>
</div>
