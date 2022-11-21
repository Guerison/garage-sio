<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>GARAGE LUCAS | SE CONNECTER</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
		<link href="../css/bootstrap.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
 
		<style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Garage Lucas</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="../index.html">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href="../apropos.html">A propos</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="../produit.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">Boutique</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="">Produit</a> b</li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href=""></a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../contact.html">Conctat</a></li>
                    </ul>
                    <form class="d-flex" action="administration/connexion.php">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="icon-user"></i> 
                            Connexion
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5" style="background-image: url(https://i.ibb.co/4d8CYtM/background-header.jpg);">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">GARAGE AUTOMOBILE </h1>
                    <p class="lead fw-normal text-white-50 mb-0">Réparation et vente de voiture d'occasion</p>
                </div>
            </div>
        </header>
        <!-- Section-->
		<div class="container">
                <div class="row">
                <div class="col-md-3"></div>
				<div class="col-md-6">
        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

<?php

	/*************************
	*  Page: connexion.php
	*  Page encodée en UTF-8
	**************************/

session_start();//session_start() combiné à $_SESSION (voir en fin de traitement du formulaire) nous permettra de garder le pseudo en sauvegarde pendant qu'il est connecté, si vous voulez que sur une page, le pseudo soit (ou tout autre variable sauvegardée avec $_SESSION) soit retransmis, mettez session_start() au début de votre fichier PHP, comme ici

?><!DOCTYPE HTML>
<html>
	<head>
		<title>Script espace membre</title>
	</head>
	<body>
		<h1>Se connecter</h1>
		<a href="./">Retour à l'accueil</a>
		<br>
		<?php
		//si une session est déjà "isset" avec ce visiteur, on l'informe:
		if(isset($_SESSION['pseudo'])){
			echo "Vous êtes déjà connecté, vous pouvez accéder à l'espace membre en <a href='espace-membre.php'>cliquant ici</a>.";
		} else {
			//si le formulaire est envoyé ("envoyé" signifie que le bouton submit est cliqué)
			if(isset($_POST['valider'])){
				//vérifie si tous les champs sont bien pris en compte:
				if(!isset($_POST['pseudo'],$_POST['mdp'])){
					echo "Un des champs n'est pas reconnu.";
				} else {
					//tous les champs sont précisés, on regarde si le membre est inscrit dans la bdd:
					//d'abord il faut créer une connexion à la base de données dans laquelle on souhaite regarder:
					$mysqli=mysqli_connect('localhost','root','','garage');//'serveur','nom d'utilisateur','pass','nom de la table'
					if(!$mysqli) {
						echo "Erreur connexion BDD";
						//Dans ce script, je pars du principe que les erreurs ne sont pas affichées sur le site, vous pouvez donc voir qu'elle erreur est survenue avec mysqli_error(), pour cela décommentez la ligne suivante:
						//echo "<br>Erreur retournée: ".mysqli_error($mysqli);
					} else {
						//on défini nos variables:
						$Pseudo=htmlentities($_POST['pseudo'],ENT_QUOTES,"UTF-8");//htmlentities avec ENT_QUOTES permet de sécuriser la requête pour éviter les injections SQL, UTF-8 pour dire de convertir en ce format
						$Mdp=md5($_POST['mdp']);
						$req=mysqli_query($mysqli,"SELECT * FROM membres WHERE pseudo='$Pseudo' AND mdp='$Mdp'");
						//on regarde si le membre est inscrit dans la bdd:
						if(mysqli_num_rows($req)!=1){
							echo "Pseudo ou mot de passe incorrect.";
						} else {
							//pseudo et mot de passe sont trouvé sur une même colonne, on ouvre une session:
							$_SESSION['pseudo']=$Pseudo;
							echo "Vous êtes connecté avec succès $Pseudo! Vous pouvez accéder à l'espace membre en <a href='espace-membre.php'>cliquant ici</a>.";
							$TraitementFini=true;//pour cacher le formulaire
						}
					}
				}
			}
			if(!isset($TraitementFini)){//quand le membre sera connecté, on définira cette variable afin de cacher le formulaire
				?>
				<br>
				<p>Remplissez le formulaire ci-dessous pour vous connecter:</p>
				<form method="post" action="connexion.php">
					<input type="text" name="pseudo" placeholder="Votre pseudo..." required><!-- required permet d'empêcher l'envoi du formulaire si le champ est vide -->
					<input type="password" name="mdp" placeholder="Votre mot de passe..." required>
					<input type="submit" name="valider" value="Connexion!">
				</form>
				<?php
			}
		}
		?>
		</div>
		<div class="col-md-3"></div>
		  </div>
            </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container" style="color: #fff;">
                <div class="row">
                <div class="col-md-4">
                <h3 style="color:#fff;">Navigation simplifié</h1>
                    <ul>
                        <li><href="index_.html">Accueil</a></li>
                        <li><href="apropos.html">A propos</a></li>
                        <li><href="produit.html">Produit</a></li>
                        <li><href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                <h3 style="color: #fff;">Adresse</h1>
                </div>
                <div class="col-md-4">
                <h3 style="color: #fff;">Nous suivre sur Facebook</h1>  
                </div>
                </div>
            </div>
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
