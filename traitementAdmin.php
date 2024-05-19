<?php
session_start();
$_SESSION['chauffeur'] = 0;
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

    $nom = $_POST['nom'];
    $objet = $_POST['objet'];
    $message = $_POST['message'];
    $numero = $_POST['numero'];
    $email = $_POST['email'];

    $sql= "INSERT INTO pleinte (nom, numero, objet, email, messages) VALUE (?, ?, ?, ?, ?)";
    $stmt = $bdd->prepare($sql);

    if(isset($nom) AND isset($objet) AND isset($message) AND isset($numero) AND isset($email) AND $nom != '' AND $objet != '' AND $numero != '' AND $message != '' AND $email != '')
    {
        try {
            $stmt->execute([htmlspecialchars($nom),htmlspecialchars($numero), htmlspecialchars($objet), htmlspecialchars($email), htmlspecialchars($message)]);
                echo "Données insérées avec succès.";
        } catch (PDOException $e) {
                echo "Erreur d'insertion : " . $e->getMessage();
        }
    }

    header('Location: tp_licence.php');