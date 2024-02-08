<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateur</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div class="container">
    <a href="index2.php" class="Btn_add"> <img src="images/retour.png"> Retour</a>
        <a href="inscri2.html" class="Btn_add"> <img src="images/plus.png"> Ajouter</a>

        <table>
            <tr id="items">
            <th>id</th>
                 <h2>Les Agents de nettoyage :<h2> <br>
                <th>Email</th>
                <th>Mot de passe</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>tel</th>
                <th>Date de naissance</th>
                <th>Ville</th>
                <th>Genre</th>
                <th>Disponible</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>

            <?php 
                //inclure la page de connexion
                include_once "connexion.php";
                //requête pour afficher la liste des employés
                $conn=new mysqli($servername,$username,$password,$DBname);

                $req = mysqli_query($con , "SELECT * FROM ag");
                if(mysqli_num_rows($req) == 0){
                    //s'il n'existe pas d'employé dans la base de donné , alors on affiche ce message :
                    echo "Il n'y a pas encore d'employé ajouter !" ;
                    
                }else {
                    //si non , affichons la liste de tous les employés
                    while($row=mysqli_fetch_assoc($req)){
                        ?>
                        <tr>
                        <td><?=$row['id']?></td>
                        <td><?=$row['email']?></td>
                        <td><?=$row['password']?></td>
                            <td><?=$row['nom']?></td>
                            <td><?=$row['prenom']?></td>
                            <td><?=$row['tel']?></td>
                            <td><?=$row['datenaissance']?></td>
                            <td><?=$row['ville']?></td>
                            <td><?=$row['genre']?></td>
                            <td><?=$row['dispo']?></td>
                            <!--Nous alons mettre l'id de chaque employé dans ce lien -->
                            <td><a href="modifier2.php?id=<?=$row['id']?>"><img src="images/pen.png"></a></td>
                            <td><a href="supprimer2.php?id=<?=$row['id']?>"><img src="images/trash.png"></a></td>
                        </tr>
                        <?php
                    }
                    
                }
            ?>
      
         
        </table>
   
   
   
   
    </div>
</body>

</html>
<style>
