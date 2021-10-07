<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="device=width-device">
	<meta name="description" content="Affordable Web Development, Professional Web Development">
	<meta name="keyword" content="Wev Development, Web Design">
	<meta name="author" content="Yahya Qaddouri, Programmer and Developer">
	<title>Dys-cover</title>
	<link rel="stylesheet" type="text/css" href="Dyscovery.css">
	<script type="text/javascript" src="index.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
	<section id="bannerlogement">
		<header>
			<div class="shape">
				<div class="logo">
					<a href="index.html">
					<img src="Images/logo1.png"></a>
				</div>
				<nav>
					<ul>
						<li><a href="index.html#ancre-quisommesnous">Qui sommes Nous?</a></li>
						<li><a href="#">Nos Services</a>
							<ul class="nav-has-dropdown">
							  <li><a href="Formation.php">Formation</a></li>
							  <li><a href="Logement.php">Logement</a></li>
							  <li><a href="Aide.html">Aide Financières</a></li>
							</ul>
						  </li> 
						<li><a href="#ancre-contact">Nous Contacter</a></li>
						<li><a href="signin.php">Se connecter</a></li>
					</ul>
				</nav>
			</div>
		</header>
	</section>
       
<section id="Logementliste">
		<div class="shape">
			<article id="Thrends">
				<h1 ><u>Liste des logements :</u></h1>

				<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=workshop;charset=utf8', 'bitnami', 'mdpdebian');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$form = $bdd->query('SELECT * FROM logement');

while($logementDonnees = $form->fetch()){
    ?>
    <div class="flex">
	<div class="cardFormation">
    Lieu : <?php echo $logementDonnees['adresseLogement']; ?><br>
    <?php
    if(!$logementDonnees['complAdresse'] == ''){
        ?>
        Complément d'adresse : <?php echo $logementDonnees['complAdresse']; ?><br>
        <?php
    }
    ?>
    Cout du loyer : <?php echo $logementDonnees['loyer']; ?><br>
    Ville : <?php echo $logementDonnees['ville']; ?><br>
    Type Logement : <?php echo $logementDonnees['typeLogement']; ?><br>
</div>
</div>
<?php
}
$form->closeCursor();
?>
				
			</article>
		</div>
	</section>
	
	<section id="Contact">
		<div id="ancre-contact" class="shape">
			<div class="contact-header">
				<h1 >Nous Contacter</h1>
				<p>Tu as des questions pour nous ? N'hésite pas à nous envoyer un message et on te répondra rapidement !</p>
			</div>
			<div class="Form">
				<form>
					<div class="inp">
						<input type="text" spellcheck="true" placeholder="Votre Nom" required="">
					</div>
					<div class="inp">
						<input type="text" spellcheck="true" placeholder="Votre Prénom" required="">
					</div>
					<div class="inp">
						<input type="email" spellcheck="true" placeholder="Votre Email" required="">
					</div>
					<div class="inp">
						<textarea type="text" spellcheck="true" placeholder="Votre Message" required=""></textarea>
					</div>
				</br>
					<div class="popo">
						<input type="checkbox" id="Newsle" name="newsletter"
							   checked>
						<label for="Newsle">J'accepte de recevoir vos e-mails et confirme avoir pris connaissance de votre politique de confidentialité et mentions légales.
						</label>
					  </div>
					<div class="btn">
						<input type="submit" value="Envoyer">
					</div>
				</form>
			</div>
		</div>
	</section>
	
	<footer>
		<div class="shape">
			<div class="flex">
			</div>
			<p>Copyright &copy; 2021 www.Dys-covery.com all right reserved || Design By <span style="color: #e81f6b;">Qaddouri Yahya</span></p>
		</div>
	</footer>
</body>

</html>