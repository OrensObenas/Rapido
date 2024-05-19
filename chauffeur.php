<?php
session_start();
$_SESSION['message'] = 0;
$_SESSION['message2'] = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    link
    <link rel="shortcut icon" href="My_image\icon.jpg" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operateur</title>
    <style>
    *{
    margin: 0;
    padding: 0;
    }
    a{
    text-decoration: none;
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
.second table .change, .second table th, .second td{
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
            <li><a href="tp_licence.php">Accueil</a></li>
            <li><a href="admin.php">R-H</a></li>
            <li><a href="operateurConnexion.php">Operateur</a></li>
            <li><a href="logout.php">Deconnexion</a></li>
        </ul>
    </header>
    <?php
    if ($_SESSION['message1'] == 0){
    ?>
    <div class="formulaire">
        <form action="traitementChauffeur.php" method="post" class="connexion">
                <h1>CHAUFFEUR</h1>
                <div class="matricule">      
                    <label for="matricule">Matricule :</label>
                    <input type="number" id="matricule" name="matricule">
                </div>
                <div class="nom">
                    <label for="nom">Votre nom:</label>
                    <input type="text" id="nom" name="nom">
                </div>
                <input type="submit" class="soumettre">
        </form>
    </div>
    <?php
        }
        else{
            ?>
        <section class="second">
            <h1>Votre Etat de Service</h1>
            <table class='table2'>
            <thead>
                <th>ID cours</th>
                <th>Point de Depart</th>
                <th>Point d'Arriver</th>
                <th>Date et Heure</th>
                <th>Status de la Course</th>
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

            $sql = 'SELECT * FROM course WHERE id = ? ORDER BY etatCourse';
            $req = $connexion->prepare($sql);
            $req->execute(array($_SESSION["idChauffeur"]));

            $reqs = $req->fetchAll();

            foreach ($reqs as $requet) {
                echo '<tr><td>' . $requet['id_course'] . '</td><td>' . $requet['depart'] . '</td><td>' . $requet['arriver'] . '</td><td>' . $requet['heure'] . '</td><td>' . $requet['etatCourse'] . '</td></tr>';
            }
        
    ?>
    </table>
    <table class="table2">
        <h1>Les Services en Cours</h1>
            <thead>
                <th>ID cours</th>
                <th>Point de Depart</th>
                <th>Point d'Arriver</th>
                <th>Date et Heure</th>
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

                $sql = 'SELECT * FROM course WHERE etatCourse = \'En Cours\' AND id = ? ORDER BY etatCourse DESC ';
                $req = $connexion->prepare($sql);
                $req->execute(array($_SESSION["idChauffeur"]));

                $reqs = $req->fetchAll();

                foreach ($reqs as $requet) {
                    echo '<form action="traitementTerminerCourse.php" method="post"><tr><td class="change">' . $requet['id_course'] . '</td><td class="change">' . $requet['depart'] . '</td><td class="change">' . $requet['arriver'] . '</td><td class="change">' . $requet['heure'] . '</td><td class="change">' . $requet['etatCourse'] . '</td>
                    <td class="cacher"><input type=\'number\' name=\'idCourse\' value=' . $requet['id_course'] . ' class=\'hidden\'></td>
                    <td class="changes">'?><?php 
                        echo '<input type="submit" value="Terminer la course" class="soumettre"></form></td></tr></form>';
                }
            }
        ?>
    </table>
</section>
<footer>
        <p>Realiser par <span>Orens</span>| Tous droit Reserver</p>
    </footer>