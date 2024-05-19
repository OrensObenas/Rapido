<?php
session_start();
$_SESSION['message'] = 0;
$_SESSION['message1'] = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
           *{
    margin: 0;
    padding: 0;
    }
    a{
    text-decoration: none;
    }
    h1{
        margin-top: 70px;
        text-align: center;
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
        section{
            display: flex;
            align-items: center;
        }
        .pleinte{
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            margin-bottom: 45px;
            margin-top: 20px;
            margin-left: 5%;
            padding-left: 10%;
            padding-top: 10px;
            width: 80%;
            border-radius: 15px;
        }
        .conteneur{
            background-color: black;
            color: white;
            display: flex;
            flex-direction: column;
            gap: 10px;
            border-radius: 10px;
            width: 400px;
            padding-left: 25px;
            margin-bottom: 15px;
            padding-bottom: 15px;
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
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <span class="r">R</span><span class="a">A</span><span class="p">P</span><span class="i">I</span><span class="d">D</span><span class="o">O</span>
        </div>
        <ul class="menu">
            <li><a href="tp_licence.php">Accueil</a></li>
            <li><a href="operateurConnexion.php">Operateur</a></li>
            <li><a href="chauffeur.php">Chauffeur</a></li>
            <li><a href="logout.php">Deconnexion</a></li>
        </ul>
    </header>

<?php
    if ($_SESSION['message2'] == 0){
    ?>
    <div class="formulaire">
        <form action="traitementConnexionAdmin.php" method="post" class="connexion">
                <h1>R-H</h1>
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
            <h1>Les Pleintes</h1>
            <section class="second" id="trafic">
            <div class="pleinte">
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

            $sql = 'SELECT * FROM pleinte';

            $req = $connexion->prepare($sql);
            $req->execute();

            $reqs = $req->fetchAll();

            foreach ($reqs as $requet) {
                echo '<div class="conteneur"><div class="contenu"> Nom : ' . $requet['nom'] . '</div><div class="contenu"> Numero: ' . $requet['numero'] . '</div><div class="contenu"> Objet : ' . $requet['objet'] . '</div><div class="contenu"> Email : ' . $requet['email'] . '</div><div class="contenu"> Message : ' . $requet['messages'] . '</div></div>';
            }
        }
    ?>
    </div>
    </section>
    <footer>
        <p>Realiser par <span>Orens</span>| Tous droit Reserver</p>
    </footer>
</body>
</html>