<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Employés</title>

    <link rel="stylesheet" href="g/style2.css">
</head>
<body>
    <div class="container">
        
        <table>
            <tr id="items">
                <h2>Les Chauffeurs :<h2> <br>
                <th>Email</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Tel</th>
                <th>Ville</th>
                <th>Genre</th>
                <th>Disponible</th>

            </tr>
            <a href="jesuisun3.html" class="Btn_add"> <img src="image/retour.png"> Retour</a>

            <?php 
            $servername="localhost:3307";
            $username="root";
            $password="";
            $DBname="projet"; 
            $con=new mysqli($servername,$username,$password,$DBname);
            $req = mysqli_query($con , "SELECT * FROM ch");

                    while($row=mysqli_fetch_assoc($req)){
                        ?>
                        <tr>
                            <td><?=$row['email']?></td>
                            <td><?=$row['nom']?></td>
                            <td><?=$row['prenom']?></td>
                            <td><?=$row['tel']?></td>
                            <td><?=$row['ville']?></td>
                            <td><?=$row['genre']?></td>
                            <td><?=$row['dispo']?></td>

                
                        
                        <?php
                    }

                    
                
            ?>

      
         
        </table>
   
   
   
   
    </div>
</body>
</html>
<style>
