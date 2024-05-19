<?php
session_start();
?>
<?php

$matricule = $_POST['matricule'];
$nom = $_POST['nom'];


if($matricule == 53 AND $nom == 'root'){
    $_SESSION['message2'] = 1;
    echo 'Hello World '.$_SESSION['message2'] ;
}
        

header('Location: admin.php');