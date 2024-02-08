<?php
//1:connexion à la base de données
$servername="localhost";
$username="root";
$password="";
$DBname="poly";
//création de la connexion
$conn=new mysqli($servername,$username,$password,$DBname);
//test de connexion
if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}//else{
   // echo"Your are connected";
//}
?>