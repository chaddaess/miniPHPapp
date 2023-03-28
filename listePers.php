<?php
session_start();
?>
<html>

<head>
    <link rel="stylesheet" href="node_modules/bootswatch/dist/cosmo/bootstrap.min.css"/>
    <link rel="stylesheet" href="cssstuff.css"/>
</head>
<body>
<?php
// Check if the 'personne' array already exists in the session
if (!isset($_SESSION['personne'])) {
    $_SESSION['personne'] =[];
}


if (isset($_POST['nom']) && isset($_POST['prenom'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $tab = array(
        'nom' => $nom,
        'prenom' => $prenom,
    );
    array_push($_SESSION['personne'], $tab);
}

?>
<div class="alert alert-success">
    <?= $nom.' '.$prenom.' '.'added successfully';?>
</div>

<button class="btn btn-outline-primary">
    <a href="AjouterPersonnes.php"> add more people?</a>
</button>
<button class="btn btn-outline-primary">
    <a href="afficherListe.php"> see list?</a>
</button>

<button class="btn btn-outline-primary">
    <a href="menu.html"> back to menu</a>
</button>
</body>
</html>






