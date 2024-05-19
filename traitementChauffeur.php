<?php
session_start();
$_SESSION['message'] = 0;
$_SESSION['message1'] = 0;
?>

<?php
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=tp','root','');/* Au constructeur de la classe PDO, on donne trois argument. Le premier qui represente le DSN(Data Source Name) qui qui change en fonction de la base de donne, le nom d'utilisateur(ici root avec les sample quote bien sur) et le mot de pass(Par defaut, phpAdmin n'as pas de mot de passe donc on met les sample quote vide pour representer l'absence de code) */
        array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Pour afficher de facon plus explicite les erreurs
    }
    catch(PDOException $e){
        die('Erreur : '.$e->getMessage());/* Le die est pour arreter l'execution de la page */
    }

    $matricule = $_POST['matricule'];
    $nom = $_POST['nom'];

    $sql = $bdd->query('SELECT * FROM chauffeur');

    while($donnees = $sql->fetch()){
        if($matricule == $donnees['id'] AND $nom == $donnees['nomChauffeur']){
            $_SESSION['message1'] = 1;
            $_SESSION["idChauffeur"] = $matricule;
        }
    }

    header('Location: chauffeur.php');