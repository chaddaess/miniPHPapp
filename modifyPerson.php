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


if (isset($_SESSION['personne']))
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $found = false;
    $nb = 0;

foreach ($_SESSION['personne'] as $person)
{
    if ($person['nom'] == $nom && $person['prenom'] == $prenom)
    {
        $found = true;
        break;
    }
    else
    {
        $nb++;
    }
}


if ($found)
{
    $newName=$_POST['nomNew'];
    $newPrenom=$_POST['prenomNew'];

    $_SESSION['personne'][$nb]['nom']=$newName;
    $_SESSION['personne'][$nb]['prenom']=$newPrenom;
    ?>
    <div class="alert alert-success"> person modified successfully</div>


<?php
}
else
{
    ?>
        <div class="alert alert-danger"> <?= "person not found!!" ?></div>
    <?php
}




}
?>
<div>
    <button class="btn btn-outline-primary">
        <a href="afficherListe.php"> view list</a>
    </button>

    <button class="btn btn-outline-primary">
        <a href="menu.html"> back to menu</a>
    </button>
</div>

</body>
</html>


