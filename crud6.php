<?php
//1:connexion à la base de données
$servername="localhost:3307";
$username="root";
$password="";
$DBname="projet"; 
//création de la connexion
$conn=new mysqli($servername,$username,$password,$DBname);
//test de connexion
if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}//else{
   // echo"Your are connected";
//}
//2:Déclaration et récupèration les valeurs entrèes par l'utilisateur
$nom=$prenom=$genre=$datenaissance=$email=$tel=$niveau=$list="";
$email=$_POST['email'];
$password=$_POST['password'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$tel=$_POST['tel'];
$datenaissance=$_POST['datenaissance'];
$ville=$_POST['ville'];
$genre=$_POST['genre'];
$dispo=$_POST['dispo'];



/*********************/ 


//3:Execution de la requête
if(isset($_POST['done'])){
    $req="INSERT INTO p values('','$email','$password','$nom',
    '$prenom','$tel','$ville','$genre','$datenaissance','$dispo')";

    if($conn->query($req)===true){
        include('confirmer2.html');
    }else{
        include('inscri2.html');
    }
}



?>