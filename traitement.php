<?php
session_start();
$_SESSION['message'] = 0;
?>

<?php
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=tp','root','');/* Au constructeur de la classe PDO, on donne trois argument. Le premier qui represente le DSN(Data Source Name) qui qui change en fonction de la base de donne, le nom d'utilisateur(ici root avec les sample quote bien sur) et le mot de pass(Par defaut, phpAdmin n'as pas de mot de passe donc on met les sample quote vide pour representer l'absence de code) */
        array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Pour afficher de facon plus explicite les erreurs
    }
    catch(PDOException $e){
        die('Erreur : '.$e->getMessage());/* Le die est pour arreter l'execution de la page */
    }

    $sql="CREATE TABLE IF NOT EXISTS chauffeur(id INT AUTO_INCREMENT PRIMARY KEY, nomChauffeur varchar(20), prenomChauffeur varchar(20), tel INT, sexe varchar(10), disponible varchar(3));
    CREATE TABLE IF NOT EXISTS operateur(matricule INT PRIMARY KEY AUTO_INCREMENT, nomOperateur varchar(20), prenomOperateur varchar(20), tel INT, sexe varchar(10)); 
    CREATE TABLE IF NOT EXISTS course (id_course INT AUTO_INCREMENT PRIMARY KEY, depart varchar(50), arriver varchar(50), heure datetime, id INT, etatCourse varchar(25), FOREIGN KEY (id) REFERENCES chauffeur(id));
    CREATE TABLE IF NOT EXISTS pleinte (id_pleinte INT AUTO_INCREMENT PRIMARY KEY, nom varchar(50), numero INT, objet varchar(100), email varchar(50), message text);
    ";

    try {
        $bdd->exec($sql);
        echo "Table créé avec succès</br>";
    } catch (PDOException $e) {
        echo "Erreur : ".$e->getMessage();
    }

    $sql= "INSERT INTO course (depart, arriver, heure, id, etatCourse) VALUE (?, ?, ?, ?, ?)";
    $sql1 = "INSERT INTO chauffeur (nomChauffeur, prenomChauffeur, tel, sexe, disponible) VALUE (?, ?, ?, ?, ?)";
    $sql2 = "INSERT INTO operateur (nomOperateur, prenomOperateur, tel, sexe) VALUE (?, ?, ?, ?)";

    $stmt = $bdd->prepare($sql);
    $stmt1 = $bdd->prepare($sql1);
    $stmt2 = $bdd->prepare($sql2);

    $depart_arriver = ['Cotonou', 'parakou', 'Savalou', 'Bohicion','Dassa', 'porto', 'dangbo', ];
    $nomChauffeur = ['Albert', 'Kevin', 'Mark', 'luck', 'john', 'albert', 'franck'];
    $prenomChauffeur = ['claude', 'appolinaire', 'Didier', 'Aimerick', 'Eliel', 'Gilbert', 'Crespin'];
    $nomOperateur = ['Gregoire', 'Vicent', 'Prince', 'Greg', 'Amstrong', 'Jack', 'Jean'];
    $prenomOperateur = ['Norbert', 'Tam', 'Raouf', 'Kevin', 'Morel', 'Espoir', 'Elise'];
    $etatCourse = ['Terminer', 'En cours', 'Terminer', 'En Attente','En Attente', 'En cours', 'Terminer'];
    $disponible = ['oui', 'non', 'oui', 'non', 'non','non', 'oui'];

    $taille = count($etatCourse);
    $taille1 = count($nomChauffeur);
    $taille2 = count($nomOperateur);

    $sql_count = "SELECT COUNT(*) AS count FROM chauffeur";
    $stmt_count = $bdd->prepare($sql_count);
    $stmt_count->execute();
    $row = $stmt_count->fetch(PDO::FETCH_ASSOC);
    $count = $row['count'];

    if ($count == 0) {
        echo 'Hello World';
        for ($i = 0; $i < $taille1; $i++) {
            try {
                $stmt1->execute([$nomChauffeur[$i], $prenomChauffeur[$i], 98850086 + $i,'M', $disponible[$i]]);
                echo "Données insérées avec succès.";
            } catch (PDOException $e) {
                echo "Erreur d'insertion : " . $e->getMessage();
            }
        }
    }

    $sql_count = "SELECT COUNT(*) AS count FROM operateur";
    $stmt_count = $bdd->prepare($sql_count);
    $stmt_count->execute();
    $row = $stmt_count->fetch(PDO::FETCH_ASSOC);
    $count = $row['count'];

    if ($count == 0) {
        for ($i = 0; $i < $taille2; $i++) {
            try {
                $stmt2->execute([$nomOperateur[$i],$prenomOperateur[$i], 53194117 + $i,'M']);
                echo "Données insérées avec succès.";
            } catch (PDOException $e) {
                echo "Erreur d'insertion : " . $e->getMessage();
            }
        }
    }
    $sql_count = "SELECT COUNT(*) AS count FROM course";
    $stmt_count = $bdd->prepare($sql_count);
    $stmt_count->execute();
    $row = $stmt_count->fetch(PDO::FETCH_ASSOC);
    $count = $row['count'];

    if ($count == 0) {
        for ($i = 0; $i < $taille; $i++) {
            try {
                $stmt->execute([$depart_arriver[$i],$depart_arriver[$taille - 1 - $i], '2024/12/1'.$i , $i + 1, $etatCourse[$i] ]);
                echo "Données insérées avec succès.";
            } catch (PDOException $e) {
                echo "Erreur d'insertion : " . $e->getMessage();
            }
        }
    }

/*     $depart = $_POST['depart'];
    $arriver = $_POST['arriver'];
    $my_date = $_POST['my_date'];

    $sql= "INSERT INTO course (depart, arriver, heure, etatCourse) VALUE (?, ?, ?, ?)";
    $stmt = $bdd->prepare($sql);

    try {
        $stmt->execute([$depart,$arriver, '2024/12/10','En attente']);
            echo "Données insérées avec succès.";
    } catch (PDOException $e) {
            echo "Erreur d'insertion : " . $e->getMessage();
    } */

    //header('Location: tp_licence.php');

    $matricule = $_POST['matricule'];
    $nom = $_POST['nom'];

    $sql = $bdd->query('SELECT * FROM operateur');

    while($donnees = $sql->fetch()){
        if($matricule == $donnees['matricule'] AND $nom == $donnees['nomOperateur'])
            $_SESSION['message'] = 1;
    }

    header('Location: operateurConnexion.php');