<?php
session_start();
$_SESSION['message1'] = 0;
$_SESSION['message2'] = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="My_image\icon.jpg" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operateur</title>
    <style>
    *{
    margin: 0;
    padding: 0;
    }
    a , li{
        text-decoration: none;
        color: white;
    }
    table{
        margin-bottom: 50px;
    }
        header{    
    background-color: #222;
    position: fixed;
    top : 0;
    left: 0;
    right: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 50px;
    padding: 0 5%;
    margin-bottom: 40px;
}
thead{
    background-color: #222;
    color: white;
}
.menu{
    display: flex;
    align-items: center;
}
.menu li{
    margin: 0 15px;
    list-style-type: none;
}
.menu li a{
    color: #fff;
    font-size: 14px;
}
.r{
    color: green;
}
.a{
    color: yellow;
}
.p{
    color: gray;
}
.i{
    color: blue;
}
.d{
    color: rgb(0, 150, 150);
}
.o{
    color: red;
}
.logo{
    font-size: 35px;
}
.formulaire{
    display: flex;
    justify-content: center;
    align-items: center;
}
.connexion{
    position: absolute;
    width: 500px;
    height: 50vh;
    background-color: #222;
    top: 25%;
    border-radius: 15px;
    color: white;
}
.connexion h1{
    text-align: center;
    margin-top: 10px;
    margin-bottom: 60px ;
    color: white;
}
.second{
    display: flex;
    flex-direction: column;
    gap: 20px;
    padding-top: 70px;
}
.second h1{
    text-align: center;
    text-decoration: underline;
}
.second table{
    border-collapse: collapse;
    width: 60%; 
    margin-left: 20%;
}
.second table .change, .second table th{
    border: 1px solid black;
    text-align: center;
    width: 85px;
}
form .matricule{
    display: flex;
    justify-content: space-between;
    height: 12%;
    font-size: 25px;
    margin-bottom: 25px ;
    margin-left: 25px;
    margin-right: 25px;

}
form .nom{
    display: flex;
    justify-content: space-between;
    height: 12%;
    font-size: 25px;
    margin-bottom: 40px ;
    margin-left: 25px;
    margin-right: 25px;
}
form .soumettre{
    position: relative;
    left: 40%;
    width: 100px;
    height: 40px;
}
.second .hidden{
    display: none;
    width: 15px;
}
.next{
    border: none;
}
.chauff{
    display: inline-block;
    position: relative;
    left: 50%;
    border-left: none;
    border-right: none;

}
.changes{
    border-bottom: 1px solid black;
    border-right: 1px solid black;
}
.cacher{
    border-bottom: 1px solid black;
}
.soumettre{
    position: relative;
    right: 60px;
    z-index: 10;
}
.ajoutCourse{
    margin-top: 20px;
    margin-bottom: 20px;
    background-color: black;
    color: white;
    height: 50vh;
    width: 500px;
    border-radius: 15px;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
}
.ajoutCourse div{
    display: flex;
    justify-content: space-between;
    height: 9%;
    font-size: 25px;
    margin-bottom: 25px ;
    margin-left: 45px;
    margin-right: 45px;
}
.ajoutCourse button{
    position: relative;
    left: 40%;
    width: 100px;
    height: 40px;
}
.miseEnForme{
    display: flex;
    align-items: center;
    justify-content: center;
}
footer{
    width: 100%;
    background-color: #222;
    padding: 10px 0;
    font-size: 14px;
    text-align: center;
    position: fixed;
    bottom: 0;
    z-index: 100;
}
footer p{
    color: #fff;
}
footer p span{
    color: #29d9d5;
}
@media screen and (max-width: 526px){
    .connexion{
        width: 90%;
    }
}
@media screen and (max-width: 983px) {
    .second table{background-color: gray;
        width: 90%;
        margin-left: 5%;
    }
}
@media screen and (max-width: 646px) {
    .second table{background-color: gray;
        width: 98%;
        margin-left: 1%;
    }
}
@media screen and (max-width: 576px) {
    .chauff{
        left: 0;
    }
}
@media screen and (max-width: 461px) {
    .chauff{
        left: 0;
    }
    .table2{
        width: 100%;
    }
    .ajoutCourse div{
        margin-left: 2px;
        margin-right: 2px;
    }
}
@media screen and (max-width: 512px) {
    .ajoutCourse{
        margin-left: 25%;
        width: 500px;
    }
    #responsivite, #responsivite h1{
        margin-left: 25%;
    }

}
</style>
</head>
<body>
    <header>
        <div class="logo">
            <span class="r">R</span><span class="a">A</span><span class="p">P</span><span class="i">I</span><span class="d">D</span><span class="o">O</span>
        </div>
        <ul class="menu">
            <li><a href="tp_licence.php" >Accueil</a></li>
            <li id="Enattente"><a href="#">Cours en Attente</a></li>
            <li id="Encours"><a href="#">Cours en course</a></li>
            <li id="ajoute"><a href="#">Ajouter course</a></li>
            <li id="CoursTerminer"><a href="#">Course Terminer</a></li>
            <li><a href="chauffeur.php">Chauffeur</a></li>
            <li><a href="logout.php">Deconnexion</a></li>
        </ul>
    </header>
    <?php
    if ($_SESSION['message'] == 0){
    ?>
    <div class="formulaire">
        <form action="traitement.php" method="post" class="connexion">
                <h1>OPERATEUR</h1>
                <div class="matricule">      
                    <label for="matricule">Matricule :</label>
                    <input type="number" id="matricule" name="matricule">
                </div>
                <div class="nom">
                    <label for="nom">Votre nom:</label>
                    <input type="text" id="nom" name="nom">
                </div>
                <input type="submit" class="soumettre" id="soumettre">
        </form>
    </div>

    <?php
        }
        else{
            ?>
                   </section>
    <section class="second">
        
            
            <h1 id="miseEnForme0h">Nos services en attente</h1>
            <table class="table2" id="miseEnForme0">
                <thead>
                    <th>ID cours</th>
                    <th>Point de Depart</th>
                    <th>Point d'Arriver</th>
                    <th>Date et Heure</th>
                    <th>Chauffeur affecte</th>
                    <th>Status de la Course</th>
                    <th class="chauff">Valider Choix</th>
                    <th class="tete"></th>
                </thead>
                <?php
                    $server = "localhost";
                    $user = "root";
                    $mdp = "";
                    $bdd = "tp"; 
                
                    try {
                            $connexion = new PDO("mysql:host=$server;dbname=$bdd", $user, $mdp);
                        } catch (PDOException $e) {
                            echo "Erreur de connexion : " . $e->getMessage();
                    }

                    function findChauffeur($id)
                    {
                    $server = "localhost";
                    $user = "root";
                    $mdp = "";
                    $bdd = "tp";

                    try {
                        $connexion = new PDO("mysql:host=$server;dbname=$bdd", $user, $mdp);
                    } catch (PDOException $e) {
                        echo "Erreur de connexion : " . $e->getMessage();
                    }

                    $sql = 'SELECT * FROM chauffeur';
                    $req = $connexion->prepare($sql);
                    $req->execute();

                    $reqs = $req->fetchAll();
                    foreach ($reqs as $requet) {
                        if ($requet['id'] == $id) {
                            return $requet['nomChauffeur'];
                        }
                    }
                }

                $sql = 'SELECT * FROM course WHERE etatCourse = \'En attente\' ORDER BY etatCourse DESC';
                $chauffeur = 'SELECT * FROM chauffeur WHERE disponible = \'oui\'';

                $req = $connexion->prepare($sql);
                $req->execute();
                $req1 = $connexion->prepare($chauffeur);
                $req1->execute();



                
                $reqs = $req->fetchAll();
                $reqs1 = $req1->fetchAll();

                foreach ($reqs as $requet) {
                    echo '<form action="traitementAjouteChauffeur.php" method="post"><tr>
                    <td class="change">' . $requet['id_course'] . '</td>
                    <td class="change">' . $requet['depart'] . '</td>
                    <td class="change">' . $requet['arriver'] . '</td>
                    <td class="change">' . $requet['heure'] . '</td>
                    <td class="change">';?> 
                    <?php 
                        $sql_count = "SELECT COUNT(*) AS count FROM chauffeur WHERE disponible = 'oui'";
                        $stmt_count = $connexion->prepare($sql_count);
                        $stmt_count->execute();
                        $row = $stmt_count->fetch(PDO::FETCH_ASSOC);
                        $count = $row['count'];
                        $temp = 1;
                        if($requet['id'] == '')
                            {
                                if($count != 0){
                                    echo '<select name=\'selection\' id=\'selection\'';
                                    echo '<option>'.$temp.'</option>';
                                    $temp++;                
                                                foreach ($reqs1 as $requet1) {
                                                    echo '<option value="' . $requet1['id'] . '"> ' . $requet1['nomChauffeur'] . '</option>';
                                                    $i++;
                                                }
                                    echo '</select>';
                                }
                                else
                                    echo 'Indisponible';
                            }else{
                                echo ''. findChauffeur($requet['id']). '';
                            }
                    echo '</td>
                    <td class="change">' . $requet['etatCourse'] . '</td>
                    <td class = "cacher"    ><input type=\'number\' name=\'idCourse\' value=' . $requet['id_course'] . ' class=\'hidden\'></td>
                    <td class="changes">'?><?php 
                    if($requet['id'] == ''){
                        if($count != 0)
                             echo '<input type="submit" value="Choisir chauffeur" class="soumettre"></form></td></tr>';
                        else
                            echo '<div class="soumettre">Patientez</div>';
                        }
                    else
                        echo '<input type="submit" value="Mettre en cours" class="soumettre"></form></td></tr>';
                }
                ?>
            </table>
        <div id="miseEnForme">
        <div class="miseEnForme">
            <div class="ajoutCourse">
                <h1>Ajouter Course</h1>
                <form action='traitementAjoutCourse.php' method='post'>
                    <div><label for="depart">Depart :</label><input type="text" name="depart" id="depart" placeholder="Depart"></div>
                    <div><label for="arriver">Arriver :</label><input type="text" name="arriver" id="arriver" placeholder="Arriver"></div>
                    <div><label for="my_date">Date et Heure:</label><input type="datetime-local" name="my_date" id="my_date" placeholder="Annee-Mois-Jour Hh-Mn-S"></div>
                    <button id="transmit">Transmettre</button>
                </form>
            </div>
        </div>
        </div>

        
        
        <h1 id="miseEnForme1h">Les Services en Cours</h1>
        <table class="table2" id="miseEnForme1">
            <thead>
                <th>ID cours</th>
                <th>Point de Depart</th>
                <th>Point d'Arriver</th>
                <th>Date et Heure</th>
                <th>Chauffeur affecte</th>
                <th>Status de la Course</th>
                    <th class="chauff">Valider Choix</th>
                    <th class="tete"></th>
            </thead><div></div>

        <?php 
                $sql = 'SELECT * FROM course WHERE etatCourse = \'En Cours\' ORDER BY etatCourse DESC ';
                $req = $connexion->prepare($sql);
                $req->execute();

                $reqs = $req->fetchAll();

                foreach ($reqs as $requet) {
                    echo '<form action="traitementTerminerCourse.php" method="post"><tr><td class="change">' . $requet['id_course'] . '</td><td class="change">' . $requet['depart'] . '</td><td class="change">' . $requet['arriver'] . '</td><td class="change">' . $requet['heure'] . '</td><td class="change">' . findChauffeur($requet['id']) . '</td><td class="change">' . $requet['etatCourse'] . '</td>
                    <td class="cacher"><input type=\'number\' name=\'idCourse\' value=' . $requet['id_course'] . ' class=\'hidden\'></td>
                    <td class="changes">'?><?php 
                        echo '<input type="submit" value="Terminer la course" class="soumettre"></form></td></tr></form>';
                }
                ?>
            </table>
        
            <h1 id="responsiviteh">Les Services Terminer</h1>
        <div  id="responsivite">
        <table class="table2" id="responsivite">
            <thead>
                <th>ID cours</th>
                <th>Point de Depart</th>
                <th>Point d'Arriver</th>
                <th>Date et Heure</th>
                <th>Chauffeur affecte</th>
                <th>Status de la Course</th>
            </thead>
            <?php
            $sql = 'SELECT * FROM course WHERE etatCourse = \'Terminer\' ORDER BY etatCourse DESC ';

            $req = $connexion->prepare($sql);
            $req->execute();

            $reqs = $req->fetchAll();

            foreach ($reqs as $requet) {
                echo '<tr><td class="change">' . $requet['id_course'] . '</td><td class="change">' . $requet['depart'] . '</td><td class="change">' . $requet['arriver'] . '</td><td class="change">' . $requet['heure'] . '</td><td class="change">' . findChauffeur($requet['id']) . '</td><td class="change">' . $requet['etatCourse'] . '</td></tr>';
            }
            ?>
        </table>
        </div>

        
    
    </section> 
    <footer>
        <p>Realiser par <span>Orens</span>| Tous droit Reserver</p>
    </footer>
            <?php
            $_SESSION['message'] = 1;
        }
    ?>
    <script>
        var cours = document.querySelector("#Encours");
        var attente = document.querySelector("#Enattente");
        var ajoute = document.querySelector("#ajoute");
        var Terminer = document.querySelector("#CoursTerminer");
        var miseEnForme0 =document.querySelector("#miseEnForme0");
        var miseEnForme0h =document.querySelector("#miseEnForme0h");
        var miseEnForme =document.querySelector("#miseEnForme");
        var miseEnForme1 =document.querySelector("#miseEnForme1");
        var miseEnForme1h =document.querySelector("#miseEnForme1h");
        var miseEnForme2 =document.querySelector("#responsivite");
        var miseEnForme2h =document.querySelector("#responsiviteh");
        var soumettre = document.querySelector("#soumettre")

        
        //soumettre.addEventListener('click', soumettreinfo);
        cours.addEventListener('click', Encours);
        attente.addEventListener('click', Enattente);
        ajoute.addEventListener('click', ajouteCourse);
        Terminer.addEventListener('click', coursTerminer);

        function Encours(){
            miseEnForme0.style.display = "none";
            miseEnForme0h.style.display = "none";
            miseEnForme.style.display = "none";
            miseEnForme1.style.display = "block";
            miseEnForme1h.style.display = "block";
            miseEnForme2.style.display = "none";
            miseEnForme2h.style.display = "none";
        }

        function Enattente(){
            miseEnForme0.style.display = "block";
            miseEnForme0h.style.display = "block";
            miseEnForme1.style.display = "none";
            miseEnForme1h.style.display = "none";
            miseEnForme.style.display = "none";
            miseEnForme2.style.display = "none";
            miseEnForme2h.style.display = "none";
        }

        function ajouteCourse(){
            miseEnForme0.style.display = "none";
            miseEnForme0h.style.display = "none";
            miseEnForme.style.display = "block";
            miseEnForme1.style.display = "none";
            miseEnForme1h.style.display = "none";
            miseEnForme2.style.display = "none";
            miseEnForme2h.style.display = "none"; 
        }

        function coursTerminer(){
            miseEnForme0.style.display = "none";
            miseEnForme0h.style.display = "none";
            miseEnForme.style.display = "none";
            miseEnForme1.style.display = "none";
            miseEnForme1h.style.display = "none";
            miseEnForme2.style.display = "block";
            miseEnForme2h.style.display = "block";
        }

        function soumettreinfo(){
            miseEnForme0.style.display = "none";
            miseEnForme0h.style.display = "none";
            miseEnForme.style.display = "none";
            miseEnForme1.style.display = "block";
            miseEnForme1h.style.display = "block";
            miseEnForme2.style.display = "none";
            miseEnForme2h.style.display = "none";
        }
    </script>
</body>
</html>