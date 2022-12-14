<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>GARAGE LUCAS | S'INSCRIRE</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
		<link href="../css/bootstrap.css" rel="stylesheet" />
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
                    <form class="d-flex" action="espace-membre/connexion2.php">
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
                    <p class="lead fw-normal text-white-50 mb-0">R??paration et vente de voiture d'occasion</p>
                </div>
            </div>
        </header>
        <!-- Section-->
         <div class="container" style="color: #fff;">
                <div class="row">
                <div class="col-md-4"></div>
				<div class="col-md-4">
				<div class="wrapper">
        <h2>S'INSCRIRE</h2>
        <p>Bien vouloir remplir les champs suivants.</p>
        <?php

/*************************
*  Page: inscription.php
*  Page encod??e en UTF-8
**************************/

?><!DOCTYPE HTML>
<html>
<head>
    <title>Script espace membre</title>
</head>
<body>
    <h1>S'inscrire</h1>
    <a href="./">Retour ?? l'accueil</a>
    <br>
    <?php
    //si le formulaire est envoy?? ("envoy??" signifie que le bouton submit est cliqu??)
    if(isset($_POST['valider'])){
        //v??rifie si tous les champs sont bien  pris en compte:
        //on peut combiner isset() pour valider plusieurs champs ?? la fois
        if(!isset($_POST['pseudo'],$_POST['mdp'],$_POST['mail'])){
            echo "Un des champs n'est pas reconnu.";
        } else {
            //on v??rifie le contenu de tous les champs, savoir si ils sont correctement remplis avec les types de valeurs qu'on souhaitent qu'ils aient
            if(!preg_match("#^[a-z0-9]{1,15}$#",$_POST['pseudo'])){
                //la preg_match d??finie: ^ et $ pour dire commence et termine par notre masque;
                //notre masque d??fini a-z pour toutes les lettres en minuscules et 0-9 pour tous les chiffres;
                //d'une longueur de 1 min et 15 max
                echo "Le pseudo est incorrect, doit contenir seulement des lettres minuscules et/ou des chiffres, d'une longueur minimum de 1 caract??re et de 15 maximum.";
                //Il est pr??f??rable que le pseudo soit en lettres minuscules ceci afin d'??tre unique, par exemple si le choix peut ??tre avec majuscule, deux membres pourrait avoir le m??me pseudo, par exemple Admin et admin et ce n'est pas ce que l'on veut.
            } else {
                //on v??rifie le mot de passe:
                if(strlen($_POST['mdp'])<5 or strlen($_POST['mdp'])>15){
                    echo "Le mot de passe doit ??tre d'une longueur minimum de 5 caract??res et de 15 maximum.";
                } else {
                    //on v??rifie que l'adresse est correcte:
                    if(!preg_match("#^[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?@[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?\.[a-z]{2,30}$#i",$_POST['mail'])){
                        //cette preg_match est un petit peu complexe, je vous invite ?? regarder l'explication d??taill??e sur mon site c2script.com
                        echo "L'adresse mail est incorrecte.";
                        //normalement l'input type="email" v??rifie que l'adresse mail soit correcte avant d'envoyer le formulaire mais il faut toujours ??tre prudent et v??rifier c??t?? serveur (ici) avant de valider d??finitivement
                    } else {
                        if(strlen($_POST['mail'])<7 or strlen($_POST['mail'])>50){
                            echo "Le mail doit ??tre d'une longueur minimum de 7 caract??res et de 50 maximum.";
                        } else {
                            //tout est pr??cis??s correctement, on inscrit le membre dans la base de donn??es si le pseudo n'est pas d??j?? utilis?? par un autre utilisateur
                            //d'abord il faut cr??er une connexion ?? la base de donn??es dans laquelle on souhaite l'ins??rer:
                            $mysqli=mysqli_connect('localhost','root','','garage');//'serveur','nom d'utilisateur','pass','nom de la table'
                            if(!$mysqli) {
                                echo "Erreur connexion BDD";
                                //Dans ce script, je pars du principe que les erreurs ne sont pas affich??es sur le site, vous pouvez donc voir qu'elle erreur est survenue avec mysqli_error(), pour cela d??commentez la ligne suivante:
                                //echo "<br>Erreur retourn??e: ".mysqli_error($mysqli);
                            } else {
                                $Pseudo=htmlentities($_POST['pseudo'],ENT_QUOTES,"UTF-8");//htmlentities avec ENT_QUOTES permet de s??curiser la requ??te pour ??viter les injections SQL, UTF-8 pour dire de convertir en ce format
                                $Mdp=md5($_POST['mdp']);// la fonction md5() convertie une chaine de caract??res en chaine de 32 caract??res d'apr??s un algorithme PHP, cf doc
                                $Mail=htmlentities($_POST['mail'],ENT_QUOTES,"UTF-8");
                                if(mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM membres WHERE pseudo='$Pseudo'"))!=0){//si mysqli_num_rows retourne pas 0
                                    echo "Ce pseudo est d??j?? utilis?? par un autre membre, veuillez en choisir un autre svp.";
                                } else {
                                    //insertion du membre dans la base de donn??es:
                                    if(mysqli_query($mysqli,"INSERT INTO membres SET pseudo='$Pseudo', mdp='$Mdp', mail='$Mail'")){
                                        echo "Inscrit avec succ??s! Vous pouvez vous connecter: <a href='connexion.php'>Cliquez ici</a>.";
                                        $TraitementFini=true;//pour cacher le formulaire
                                    } else {
                                        echo "Une erreur est survenue, merci de r??essayer ou contactez-nous si le probl??me persiste.";
                                        //echo "<br>Erreur retourn??e: ".mysqli_error($mysqli);
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    if(!isset($TraitementFini)){//quand le membre sera inscrit, on d??finira cette variable afin de cacher le formulaire
        ?>
        <br>
        <p>Remplissez le formulaire ci-dessous pour vous inscrire:</p>
        <form method="post" action="inscription.php">
            <input type="text" name="pseudo" placeholder="Votre pseudo..." required><!-- required permet d'emp??cher l'envoi du formulaire si le champ est vide -->
            <input type="password" name="mdp" placeholder="Votre mot de passe..." required>
            <input type="email" name="mail" placeholder="Votre mail..." required>
            <input type="submit" name="valider" value="Cliquez ici pour envoyer le formulaire">
        </form>
        <?php
    }
    ?>
</body>
</html>
    </div>    </div>
				<div class="col-md-4"></div>
		
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container" style="color: #fff;">
                <div class="row">
                <div class="col-md-4">
                <h3 style="color:#fff;">Navigation simplifi??</h1>
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
