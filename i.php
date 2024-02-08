<?php
include('crud.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read PHP</title>
</head>
<body>
    <?php
    $sql="SELECT * FROM inscrit";
    $res=mysqli_query($conn,$sql);
    $conn->close();

    ?>
    <table border="1">
        <thead>
            <t<th>Email</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Tel</th>
                <th>Ville</th>
                <th>Genre</th>
                <th>Disponible</th>
      
        </thead> 
        <?php
        while($ligne=mysqli_fetch_array($res)){
        ?>
        <tr>
        <td><?php echo $ligne['email'] ?></td>
            <td><?php echo $ligne['password'] ?></td>
            <td><?php echo $ligne['nom'] ?></td>
            <td><?php echo $ligne['prenom'] ?></td>
            <td><?php echo $ligne['Tel'] ?></td>
            <td><?php echo $ligne['ville'] ?></td>
            <td><?php echo $ligne['genre'] ?></td>
            <td><?php echo $ligne['datanaissance'] ?></td>
        </tr>
       <?php
        }
        ?>
    </table>
</body>
</html>