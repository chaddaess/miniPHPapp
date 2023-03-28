<?php
session_start();
$newName=$_POST['nomNew'];
$newPrenom=$_POST['prenomNew'];

$_SESSION[$nb_found]['nom']=$newName;
$_SESSION[$nb_found]['prenom']=$newPrenom;
