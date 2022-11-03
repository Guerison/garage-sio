<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>GARAGE LUCAS | AJOUTER UNE ANNONCE</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
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
		<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="ajout-annonce.php">AJOUTER UNE ANNONCE</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">SUPPRIMER UNE ANNONCE</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"><a href="reset-password.php" class="btn btn-warning">Réinitialiser le mot de passe</a></a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#"><a href="deconnexion.php" class="btn btn-danger ml-3">Se déconnecter</a></a>
  </li>
</ul>
	          <br/>
			  <br/>
			  <p><strong>Veiller fournir les informations au sujet de votre véhicule pour déposer votre annonce</strong><p/>
		     <form>
			 <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Prénom">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Nom">
    </div>
  </div>
  <br/>
  
	<div class="form-group">
    <label for="exampleInputEmail1"></label>
    <input type="immatriculation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer votre email">
    <small id="emailHelp" class="form-text text-muted">Renseignez votre adresse email.</small>
  </div><br/>
			 
  <div class="form-group">
    <label for="exampleInputEmail1"></label>
    <input type="immatriculation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Immatriculation">
    <small id="emailHelp" class="form-text text-muted">Renseignez le numéro d'immatriculation du véhicule.</small>
  </div><br/>
  
  <select class="form-control">
  <option>Sélectionnez la marque</option>
  <option>Peugeot</option>
  <option>Renault</option>
  <option>Citroën</option>
  <option>Mercedes</option>
  <option>Audi</option>
  <option>Volkswagen</option>
  <option>Land Rover</option>
  </select> 
  <br/>
  
  
  <div class="form-group">
    <label for="exampleInputEmail1"></label>
    <input type="immatriculation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Modèle">
    <small id="emailHelp" class="form-text text-muted">Renseignez le modèle de votre véhicule.</small>
  </div><br/>
  
  
   <div class="form-group">
    <label for="exampleInputEmail1"></label>
    <input type="immatriculation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Date immatriculation">
    <small id="emailHelp" class="form-text text-muted">Date de première mise en circulation.</small>
  </div><br/>
   
  
   <div class="form-group">
    <label for="exampleInputEmail1"></label>
    <input type="immatriculation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Le prix ">
    <small id="emailHelp" class="form-text text-muted">Le prix de votre véhicule.</small>
  </div><br/>
  
  
   <div class="form-group">
    <label for="exampleInputEmail1"></label>
    <input type="immatriculation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Date d'entrée">
    <small id="emailHelp" class="form-text text-muted">Date de rentrée du véhicule au garage.</small>
  </div><br/>
  
   <div class="form-group">
    <label for="exampleInputEmail1"></label>
    <input type="immatriculation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Puissance fiscale">
    <small id="emailHelp" class="form-text text-muted">Nombre de chevaux Fiscaux.</small>
  </div><br/>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
    <label class="custom-file-label" for="validatedCustomFile">Ajouter vos fichiers...</label>
    <div class="invalid-feedback">images, videos, pdf...</div>
  </div>
 
  
  
    <div class="form-group">
    <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
      <label class="form-check-label" for="invalidCheck3">
        J'accepte les termes et conditions d'utilisation
      </label>
      <div class="invalid-feedback">
        Vous devez accepter les termes et conditions d'utilisation pour publier.
      </div>
    </div>
  </div>
  
   <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
  </div>
  <button type="submit" class="btn btn-primary">Publier</button>
</form>
 <br/> <br/>
</div>
<div class="col-md-3"></div>
		</div>
		</div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container" style="color: #fff;">
                <div class="row">
                <div class="col-md-4">
                <h3 style="color: #fff;">Navigation simplifié</h1>
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
