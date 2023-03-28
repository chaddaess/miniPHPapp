<?php
session_start();
$nb=0;
?>
<html>
<head>
    <link rel="stylesheet" href="node_modules/bootswatch/dist/cosmo/bootstrap.min.css"/>
    <link rel="stylesheet" href="cssstuff.css/">
</head>
<body>
<?php
if (isset($_SESSION['personne']))
{
    $found=false;
    $name=$_POST['nomDel'];
    $prenom=$_POST['prenomDel'];
    $nb=0;

    foreach ($_SESSION['personne'] as $person)
    {
        if ($person['nom']==$name && $person['prenom']==$prenom)
            {
                $found=true;
                break;
            }
        else
        {
            $nb++;
        }
    }


    if($found)
    {
        unset($_SESSION['personne'][$nb]);

     ?>
<div class=" alert alert-success">
        <?= $name.' '.$prenom.' '.'deleted successfully'.'<br>';?>
</div>
<?php
    }

    else
    {
        ?>
<div class="alert alert-danger">
        <?='person not found!!';?>
</div>
<?php
    }
} ?>
<button class="btn btn-outline-primary">
    <a href="menu.html"> back to menu</a>
</button>
</body>
</html>
