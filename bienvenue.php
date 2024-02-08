<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['nom'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['nom']; ?></h1>
     <a href="aller.html">aller</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>