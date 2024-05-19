<?php
session_start();
$_SESSION['chauffeur'] = 0;
?>

<?php
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=tp','root','');/* Au constructeur de la classe PDO, on donne trois argument. Le premier qui represente le DSN(Data Source Name) qui qui change en fonction de la base de donne, le nom d'utilisateur(ici root avec les sample quote bien sur) et le mot de pass(Par defaut, phpAdmin n'as pas de mot de passe donc on met les sample quote vide pour representer l'absence de code) */
        array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Pour afficher de facon plus explicite les erreurs
    }
    catch(PDOException $e){
        die('Erreur : '.$e->getMessage());/* Le die est pour arreter l'execution de la page */
    }

    $idCourse = $_POST['idCourse'];
    $etatCourse = 'Terminer';


    $req = $bdd->prepare('UPDATE course SET etatCourse = ? WHERE id_course = ?');/* On mets a jours la table(une ou des entitees) news en mofiant un titre et un contenu en focntion de l'id */
    $req1 = $bdd->prepare('SELECT * FROM course WHERE id_course = ?');
    $req2 = $bdd->prepare('UPDATE chauffeur SET disponible = ? WHERE id = ?');

    

/*     $req3 = $bdd->prepare('SELECT chauffeur WHERE id = ?');
    $req->execute(array($requet1['id']));
    $requet3 = $req3->fetch(); */

    

    try {
        $req1->execute(array($idCourse));
        $requet1 = $req1->fetch();
        echo "Données insérées avec succès.".$requet1['id'] ;
    } catch (PDOException $e) {
            echo "Erreur d'insertion : " . $e->getMessage();
    }

    try {
        $req3 = $bdd->prepare('UPDATE chauffeur SET disponible = ? WHERE id = ?');
        $req3->execute(array('oui', $requet1['id']));
        echo "Données insérées avec succès.";
    } catch (PDOException $e) {
        echo "Erreur d'insertion : " . $e->getMessage();
    }



    if(isset($idCourse) AND isset($etatCourse)){
        try {
                $req->execute(array($etatCourse, $idCourse)); 
                echo "Données insérées avec succès.";
        } catch (PDOException $e) {
                echo "Erreur d'insertion : " . $e->getMessage();
        }
    }

    if($_SESSION['message1'] == 1)
        header('Location: chauffeur.php');
    else
        header('Location: operateurConnexion.php');