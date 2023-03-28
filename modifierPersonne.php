<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/bootswatch/dist/cosmo/bootstrap.min.css"/>
    <link rel="stylesheet" href="cssstuff.css"/>
</head>
<body>
<div class=" alert alert-primary"> enter details of person to modify</div>
<form  name="formulaire" method="post" action="modifyPerson.php">
    Nom <input type="text" name="nom" >
    prenom <input type="text" name="prenom" >
    <br>
    <br>
    <br>
<div class="alert alert-primary"> Please enter new info</div>
        Nouveau Nom <input type="text" name="nomNew">
        Nouveau Prenom <input type="text" name="prenomNew">
    <br>
    <br>
    <button class="btn btn-primary" type="submit">submit</button>

</form>
<br>
<button class="btn btn-outline-primary">
    <a href="menu.html"> back to menu</a>
</button>
</body>
</html>