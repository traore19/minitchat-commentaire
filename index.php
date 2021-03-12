<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
 

<div class="container ">
<div class="row pt-4 text-center">

<form action="minichat_post.php" method="post">
<label for="">
Pseudo:
    <input type="text" name="pseudo">
</label>
<br>
<label for="">
Message:
    <input type="text" name="message">
</label>
<br>
<input type="submit">




</form>
</div>


</div>

<?php
$bdd = new PDO('mysql:host=localhost;dbname=phpdb;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
// recuperation des dix derniers message

$response = $bdd->query('SELECT pseudo, message FROM minichat  ORDER BY ID DESC ');

 //affichage des message
 while ($donnees=$response->fetch()) {
     # code...
     echo '<p>'.htmlspecialchars($donnees['pseudo']).':'.htmlspecialchars($donnees['message']).'</p>';
 }
 


?>

    
    
</body>
</html>