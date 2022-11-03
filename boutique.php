
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>GARAGE LUCAS</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.html">Garage Lucas</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index_.html">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href="a-propos.html">A propos</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="boutique.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">Boutique</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="boutique.php">Produit</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href=""></a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Conctat</a></li>
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
        <section class="py-5">
            <div class="container"> 
		    <div class="row">
			<div class="col-md-3">
			
</div>
			<div class="col-md-9">
			
			
			<?php
// connexion à la base
$user = "root";
$pass = "root";
$dnspdo = 'mysql:dbname=garage;host=localhost;charset=utf8';

$bdd = new PDO($dnspdo, $user, $pass);


// Par sécurité, tout le code ci-dessus sera remplacé par un require_once('dossier/infos.php');
// avec un htaccess interdisant l'accès au dossier

// Récupère les données de la table clients
$requete1 = 'SELECT * FROM annonces';


// le prepare (avec le execute) est comme un query mais beaucoup plus sécurisé (voir ci-dessous)
// l'opérateur flèche -> permer d'accéder aux éléments d'une classe (méthode ou attribut)
$resultat = $bdd->prepare($requete1);
$resultat->execute();

// récupe d'infos (pas utilisés ici)
$nbreResult = $resultat->rowCount(); // Nbre de ligne de résultat
$colcount = $resultat->columnCount(); // Nombre de colonne

if (!$resultat) {
    echo "Problème de requete";
} else {
?>


			
			 <table>
                 <tr>
				 
				 <td>

		 </td>
				
	 <td>
	
				
<ul>
<?php
while($ligne = $resultat->fetch()) {
        
		echo "<h3><a href='/'#>".$ligne['titre']."</a></h3>"; 
		
		echo "<P><strong style='/'color:red>IMMATRICULATION:</strong> ".$ligne['immatriculation']."</P>";
		echo "<P><strong style='/'color:red>DATE DE MISE EN CIRCULATION: </strong>".$ligne['datecirculation']."</strong></P>";
		echo "<P><strong style='/'color:red>DATE DE MISE EN GARAGE:</strong> ".$ligne['dategarage']."</P>";
		echo "<P><strong style='/'color:red>PUISSANCE FISCALE:</strong> ".$ligne['fiscale']."</P>";
		echo "<P><strong style='/'color:red>PRIX DU VEHICULE:</strong> ".$ligne['prix']."</P>";
		
	
		echo "<P>".$ligne['description']."</P></br></br>";
		
	}  
      ?>
</ul>
 </td>		 </tr>
</table>

            
			  
		    </div>
			
			<?php
     } // fin du else
$resultat->closeCursor(); // libère le résultat
// Un closeCursor annule l'execute() mais pas l'analyse (prepare) donc impose un nouveau execute() si une nouvelle requête est utilisée plus bas - Equivalent à MYSQL_DATA_SEEK (si 2 fetch à la suite)
?>
              
		    </div>
		    </div>
		    </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container" style="color: #fff;">
                <div class="row">
                <div class="col-md-4">
                <h3 style="color: #fff;">Navigation simplifié</h1>
                    <ul>
                        <li><a href="index.html">Accueil</a></li>
                        <li><a href="apropos.html">A propos</a></li>
                        <li><a href="produit.html">Produit</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                <h3 style="color: #fff;">Adresse</h1>
				 <p>8, route des Artifices BP M2 98849 Nouméa</p> 
				 <p>Cedex Téléphone : +687246565 Fax : +687246570</p>
                </div>
                <div class="col-md-4">
                <h3 style="color: #fff;">Nous suivre sur Facebook</h1> 
				<a href="#"><img src="image/OIP.jfif" alt="" longdesc="#" height="80" width="80" align="middle"> </a>
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
