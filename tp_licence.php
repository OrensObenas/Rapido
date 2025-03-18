<?php
session_start();
$_SESSION['message'] = 0;
$_SESSION['message1'] = 0;
$_SESSION['message2'] = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="My_image\icon.jpg" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="My_style/style.css"> -->
    <title>Tp_licence_pro</title>
    <style>
        *{
    margin: 0;
    padding: 0;
    }
    a{
    text-decoration: none;
    color: white;
    }
    body{
        background-color: white;
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
    height: 50px;
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
.menu-hamburger{
    display: none;
    position: absolute;
    top: 45px;
    right: 45px;
    width: 30px;
}
#home{ 
    background: linear-gradient(rgba(0,0,0,0.1),#222), url("taxi3.jfif");
    background-position: center;
    background-size: cover;
    height: calc(60vh - 50px); 
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    position: relative;
}

#home h2{
    font-size: 45px;
    margin-bottom: 10px;
    -webkit-text-stroke: #fff 1.5px;    
    color: transparent;

}
#home h4{
    font-size: 50px;
    color: #fff;
    margin-bottom: 10px;
    text-transform: capitalize;
}
/* .first{
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 60%;
    margin-left: 20%;
    gap: 20px;
    margin-top: 60px;
} */
.first h1{
    text-decoration: underline;
    text-align: center;
}
.first p{
    text-align: justify;
    position: relative;
}
.first{
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    gap: 30px;
    margin-left: 28%;
    margin-top: 30px;
    background-color: #222;
    color: white;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
    border-radius: 18px;
    padding: 20px;
    transition: 1s;
    width: 40%;
}
.first:hover{
    transform: scale(1.1);
}
.second{
    display: flex;
    flex-direction: column;
    gap: 20px;
    padding-top: 70px;
}
.second h1{
    text-align: center;
}
.second table{
    border: 1px solid black;
    border-collapse: collapse; 
    width: 60%;
    margin-left: 20%;
}
.second table td, .second table th{
    border: 1px solid black;
    text-align: center;
    width: 85px;
}

.third button{
    display: flex;
    width: 100px;
    height: 40px;
    margin-left: 47%;
    justify-content: center;
    align-items: center;
    margin-bottom: 50px;
}
#contact{
    padding: 10px 10%;/* 
    margin-bottom: 50px; */
    height: 95vh;
    background-color: #111;
    margin-top: 50px;
}
#contact .title{
    color: white;
    margin-top: 10px;
    margin-bottom: 10px;
}
#contact form{
    background-color: #ffffff;
    margin: auto;
    display: flex;
    flex-direction: column;
    align-items: end;
    padding: 20px;
}
.left-right{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
}
.left-right .left{
    padding: 0 2%;
    width: 50%;
    display: flex;
    flex-direction: column;
} 
.left-right .right{
    padding: 0 2%;
    width: 50%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    position: relative;
    bottom: 105px;
}
#contact form label{
    font-size: 14px;
    padding: 10px 0;
    font-weight: 600;
}
#contact form input{
    padding: 8px;
    outline: 0;
    border: 1px solid #999;
}
textarea{
    height: 150px;
    resize: none;
    outline: 0;
    width: 100%;
    padding: 10px;
}
#contact form input:focus, textarea:focus{
    border: 1px solid #29d9d5;
    box-shadow: 0 0 3px #29d9d5;
}
#contact button{
    width: fit-content;
    padding: 8px 40px;
    background-color: #111;
    border: 1px solid #111;
    color: #fff;
    cursor: pointer;
    transition: 0.5s;
}
#contact button:hover{
    letter-spacing: 1px;
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

@media screen and (max-width: 835px) {
    .second table{background-color: gray;
        width: 90%;
        margin-left: 5%;
    }
    
}
@media screen and (max-width: 624px) {
    .nav-links{
        position: absolute;
        background-color: rgba(255, 255, 255, 0.205);
        backdrop-filter: blur(20px);
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-left: -100%;
        transition: all.5s ease;
    }
    .nav-links.mobile-menu{
        margin-left: 0;
    }    
    .nav-links ul{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .nav-links ul li {
        padding: 30px ;
    }
    .nav-links ul li a {
        color: black;
        font-size: 20px;
    }
    .menu-hamburger{
        display: block;
        position: absolute;
        top: 15px;
    }
}  
@media screen and (max-width: 581px) {
    .first{
        width: 90%;
        padding: 2%;
        margin-left: 3%;
    }
    .second table{background-color: gray;
        width: 98%;
        margin-left: 1%;
    }
    #home h4{
        font-size: 40px;
    }
    
}

    </style>
</head>

<body>
    <header>
        <div class="logo">
            <span class="r">R</span><span class="a">A</span><span class="p">P</span><span class="i">I</span><span class="d">D</span><span class="o">O</span>
        </div>
        <div class="nav-links">
            <ul class="menu">
                <li><a href="#">Accueil</a></li>
                <li><a href="operateurConnexion.php">Operateurs</a></li>
                <li><a href="chauffeur.php">Chauffeur</a></li>
                <li><a href="admin.php">R-H</a></li>
                <li><a href="#contact">Nous Contactez</a></li>
            </ul>
        </div>
        <img src="My_image/menu-btn.png" alt="button" class="menu-hamburger">
    </header>
    <section id="home">
        <h2>Nous suivre</h2>
        <h4>Voyage en securité</h4>
    </section>
    <section class="first">
        <h1>Qui somme nous ?</h1>
        <p>Fiere de plus de 10 annees d'experience, notre societe <span>Rapido</span> est l'une des pionniere dans le domaine des transport urbain avec plus de 500 course a son actif.
         <br><br> Nous disposons egalement de proffesionnel qualifier qui assurerons votre securiter et confort tout au long de vos voyage.Faire confiance a <span>Rapido</span>, c'est opter pour la qualiter et un excellent voyage.</p>
    </section>
    <section class="second" id="trafic">
        <h1>Notre traffic</h1>
        <table>
            <thead>
                <th>ID cours</th>
                <th>Point de Depart</th>
                <th>Point d'Arriver</th>
                <th>Date et Heure</th>
                <th>Chauffeur affecte</th>
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

            $sql = 'SELECT * FROM course WHERE etatCourse != \'En Attente\' ORDER BY etatCourse DESC ';

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

            $req = $connexion->prepare($sql);
            $req->execute();

            $reqs = $req->fetchAll();

            foreach ($reqs as $requet) {
                echo '<tr><td>' . $requet['id_course'] . '</td><td>' . $requet['depart'] . '</td><td>' . $requet['arriver'] . '</td><td>' . $requet['heure'] . '</td><td>' . findChauffeur($requet['id']) . '</td><td>' . $requet['etatCourse'] . '</td></tr>';
            }
            ?>
        </table>
    </section>
    <!-- <section class="third">
        <h1>Nos services en attente</h1>
        <table class="table2">
            <thead>
                <th>ID cours</th>
                <th>Point de Depart</th>
                <th>Point d'Arriver</th>
                <th>Date et Heure</th>
                <th>Chauffeur affecte</th>
                <th>Status de la Course</th>
            </thead>
            <?php
            $sql = 'SELECT * FROM course WHERE etatCourse = \'En Attente\' ORDER BY etatCourse DESC ';

            $req = $connexion->prepare($sql);
            $req->execute();

            $reqs = $req->fetchAll();

            foreach ($reqs as $requet) {
                echo '<tr><td>' . $requet['id_course'] . '</td><td>' . $requet['depart'] . '</td><td>' . $requet['arriver'] . '</td><td>' . $requet['heure'] . '</td><td>' . findChauffeur($requet['id']) . '</td><td>' . $requet['etatCourse'] . '</td></tr>';
            }
            ?>
        </table>
        <button>Ajouter course</button>

        <form action='traitement.php' method='post'>
            <label for="depart">Depart :</label><input type="text" name="depart" id="depart"></div><br>
            <div><label for="arriver">Arriver :</label><input type="text" name="arriver" id="arriver"></div><br>
            <div><label for="my_date">Date et Heure:</label><input type="text" name="my_date" id="my_date"><br>
            <button id="transmit">Transmettre</button>
        </form>
    </section>
     --><section id="contact">
        <h1 class="title">Contact</h1>
        <form method="post" action="traitementAdmin.php">
            <div class="left-right">
                <div class="left">
                    <label>Nom complet</label>
                    <input type="text" name="nom">
                    <label>Objet</label>
                    <input type="text" name="objet" id="objet">
                    
                    <label>Message</label>
                    <textarea name="message" id="message" cols="10" rows="10"></textarea>
                </div>
                <div class="right">
                    <label>Numero</label>
                    <input type="number" name="numero">
                    <label>Email</label>
                    <input type="email" name="email">
                </div>
            </div>
            <button type="submit">Envoyer</button>
        </form>
    </section>
    <footer>
        <p>Realiser par <span>Orens</span>| Tous droit Reserver</p>
    </footer>
    </body>
    <script>
    const menuHumberger = document.querySelector(".menu-hamburger");
    const navLinks = document.querySelector(".nav-links");

    menuHumberger.addEventListener('click',()=>{
        navLinks.classList.toggle('mobile-menu')
    });
</script>
</html>
