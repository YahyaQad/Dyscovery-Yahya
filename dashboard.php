<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="device=width-device">
    <meta name="description" content="Affordable Web Development, Professional Web Development">
    <meta name="keyword" content="Wev Development, Web Design">
    <meta name="author" content="Alexandre Anania, Programmer and Developer">
    <link rel="icon" type="image/png" href="Images/logo1.png" />
    <title>Dys-covery</title>
    <link rel="stylesheet" type="text/css" href="profile.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <section id="banner">
        <header>
            <div class="shape">
                <a href="dashboard.php">
                <div class="logo">
                    <img src="Images/logo1.png"></a>
                </div>
                <nav>
                    <ul>
                        <li><a href="#welcome">Tableau de bord</a></li>
                        <li><a href="conseiller.html">Contacter mon conseiller</a></li>
                        <li><a href="#">Les tutos</a></li>
                        <li class="user">
                            <img src="ressources_site/picto/default-user.svg">
                            <ul class="nav-has-dropdown">
                                <li><a href="#">Profil</a></li>
                                <li><a href="deconnexion.php">Déconnexion</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
    </section>

    <?php
    $db_username = 'bitnami';
    $db_password = 'mdpdebian';
    $db_name     = 'workshop';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('Connexion à la bdd impossible');
session_start();


if (isset($_SESSION['adresseMail']) ) {
    ?>
    <section id="welcome">
        <div id="welcome-contact" class="shape">
            <div class="welcome-header">
            <h1>Bonjour <span class="username">Alexandre,</span></h1>

            </div>
        </div>
    </section>

    <section id="step">
        <div class="upper-line">
            <div id="accomodation" class="cards">
            <a href="Logement.php">
            <img class="picto" src="ressources_site/picto/picto_logement.png"></a>
                <div class="pointstep green"></div>
                <p> Mon logement</p>
            </div>
            <div id="educational" class="cards">
                <a href="Formation.php">
                <img class="picto" src="ressources_site/picto/picto_school.png"></a>
                <div class="pointstep orange"></div>
                <p> Mon établissement</p>
            </div>
        </div>
        <div class="bottom-line">
            <div id="finance" class="cards">
                <a href="Aide.html">
                <img class="picto" src="ressources_site/picto/picto_moula.png"></a>
                <div class="pointstep orange"></div>
                <p> Démarches financières</p>
            </div>
            <div id="apprenticeship" class="cards">
                <a href="Formation.php">
                <img class="picto" src="ressources_site/picto/picto_alternance.png"></a>
                <div class="pointstep red"></div>
                <p> Mon alternance</p>
            </div>
        </div>
    </section>

    <section id="Contact">
        <div id="ancre-contact" class="shape">
            <div class="contact-header">
                <h1>Vous rencontrez un problème ?</h1>
            </div>
            <div class="Form">
                <form>
                    <label>Envoyez-nous un message : </label>
                    <div class="inp">
                        <input type="textarea" spellcheck="true" required="true" id="textarea">
                    </div>
                    <div class="btn">
                        <input type="submit" value="Envoyer">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php
    
} else {
    echo "Please log in first to see this page.";
}

?>

    

</html>