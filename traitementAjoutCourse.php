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

    $depart = $_POST['depart'];
    $arriver = $_POST['arriver'];
    $my_date = $_POST['my_date'];

    $sql= "INSERT INTO course (depart, arriver, heure, etatCourse) VALUE (?, ?, ?, ?)";
    $stmt = $bdd->prepare($sql);

    if(isset($depart) AND isset($arriver) AND isset($my_date) AND $depart != '' AND $arriver != '' AND $my_date != '')
    {
        try {
            $stmt->execute([htmlspecialchars($depart),htmlspecialchars($arriver), htmlspecialchars($my_date),'En attente']);
                echo "Données insérées avec succès.";
        } catch (PDOException $e) {
                echo "Erreur d'insertion : " . $e->getMessage();
        }
    }
    header('Location: operateurConnexion.php');