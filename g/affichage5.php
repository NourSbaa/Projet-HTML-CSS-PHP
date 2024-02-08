<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Employés</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div class="container">
        
        <table>
            <tr id="items">
            <h2>Les Plombiers :<h2> <br>
            <th>id</th>
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
            <a href="index2.php" class="Btn_add"> <img src="images/retour.png"> Retour</a>

            <a href="inscri6.html" class="Btn_add"> <img src="images/plus.png"> Ajouter</a>


            <?php 
            $servername="localhost:3307";
            $username="root";
            $password="";
            $DBname="projet"; 
            $con=new mysqli($servername,$username,$password,$DBname);
            $req = mysqli_query($con , "SELECT * FROM p");

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
                            <td><a href="modifier6.php?id=<?=$row['id']?>"><img src="images/pen.png"></a></td>
                            <td><a href="supprimer6.php?id=<?=$row['id']?>"><img src="images/trash.png"></a></td>
                        </tr>
                        <?php
                    }

                    
                
            ?>

      
         
        </table>
   
   
   
   
    </div>
</body>
</html>
<style>

