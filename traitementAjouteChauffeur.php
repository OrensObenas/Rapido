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

    $idcourse = $_POST['idCourse'];
    $idChauffeur = $_POST['selection'];

/*     $sql = "INSERT INTO course (id) VALUES (:idChauffeur)";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':idChauffeur', $idChauffeur);
    $stmt->execute(); */

    $req = $bdd->prepare('UPDATE course SET id = ? WHERE id_course = ?');/* On mets a jours la table(une ou des entitees) news en mofiant un titre et un contenu en focntion de l'id */
    $req1 = $bdd->prepare('UPDATE course SET etatCourse = ? WHERE id_course = ?');/* On mets a jours la table(une ou des entitees) news en mofiant un titre et un contenu en focntion de l'id */
    $req2 = $bdd->prepare('UPDATE chauffeur SET disponible = ? WHERE id = ?');/* On mets a jours la table(une ou des entitees) news en mofiant un titre et un contenu en focntion de l'id */

    if(isset($idcourse) AND isset($idChauffeur)){
            try {
                $req->execute(array($idChauffeur, $idcourse));
                $req2->execute(array('non',$idChauffeur));

                echo "Données insérées avec succès.";
        } catch (PDOException $e) {
                echo "Erreur d'insertion : " . $e->getMessage();
        }
    }else{
        try {
                $req1->execute(array('En cours', $idcourse));
                $req2->execute(array('non',$idChauffeur));
                echo "Données insérées avec succès.";
        } catch (PDOException $e) {
                echo "Erreur d'insertion : " . $e->getMessage();
        }
    }

/*     while($donnees = $sql->fetch()){
        if(1){
            $bdd->exec('INSERT INTO course (id) VALUE ($idcourse)');
            echo 'ajout effectuer';
        }
        echo 'je suis ici';
    } */
    header('Location: operateurConnexion.php');
    //$idcourse == $donnees['id_course'] OR $donnees['id_course'] == 8