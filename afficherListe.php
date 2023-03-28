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
<?php
if (empty($_SESSION['personne'])) {

header('location:AjouterPersonnes.php');
echo 'liste vide ,ajouter des personne';
}

else
{
foreach ($_SESSION['personne'] as $personne)
{
    ?>
<div class="alert alert-info"><?= $personne['prenom'].' '.$personne['nom'].'<br>';?></div>
<?php
}
}?>
<br>
<br>
<button class="btn btn-outline-primary">
    <a href="menu.html"> back to menu</a>
</button>
</body>
</html>

