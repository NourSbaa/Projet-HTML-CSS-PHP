
<?php 
//Nous allons démarrer la session avant toute chose
session_start();

 if(isset($_POST['connexion'])){ // Si on clique sur le boutton , alors :
   //Nous allons verifiér les informations du formulaire
   if(isset($_POST['email']) && isset($_POST['password'])) { //On verifie ici si l'utilisateur a rentré des informations
     //Nous allons mettres l'email et le mot de passe dans des variables
     $email = $_POST['email'] ;
     $password = $_POST['password'] ;
   
      //Nous allons verifier si les informations entrée sont correctes
      //Connexion a la base de données
      $nom_serveur = "localhost:3307";
      $utilisateur = "root";
      $mot_de_passe ="";
      $nom_base_données ="projet" ;
      $con = mysqli_connect($nom_serveur , $utilisateur ,$mot_de_passe , $nom_base_données);
      //requete pour selectionner  l'utilisateur qui a pour email et mot de passe les identifiants qui ont été entrées
       $req = mysqli_query($con , "SELECT * FROM ch WHERE email = '$email' AND password ='$password' ") ;
       $num_ligne = mysqli_num_rows($req) ;//Compter le nombre de ligne ayant rapport a la requette SQL
       if($num_ligne > 0){
           header("Location:aller2.html") ;//Si le nombre de ligne est > 0 , on sera redirigé vers la page bienvenu
           // Nous allons créer une variable de type session qui vas contenir l'email de l'utilisateur
           $_SESSION['email'] = $email ;
       }else {//si non
         header("Location:conn2.php") ;
          }
   }
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



<link rel="stylesheet" type="text/css" href="css/css_form1.css">
<div class="box">
  <h1>Connecter</h1>

  <form   method="POST"  action="conn3.php">
  
  <label id="icon" for="name"><i class="icon-envelope "></label><br>
  <input type="text" name="email" id="name" placeholder="Email" />
  <label id="icon" for="name"><i class="icon-shield"></label><br>
  <input type="password" name="password" id="name" placeholder="Mot de passe" />
  <input type="submit" value="connexion" name="connexion">
  </form>
</div>
