<?php
session_start();  // démarrage d'une session

// on vérifie que les variables de session identifiant l'utilisateur existent
if (!isset($_SESSION['identifiant'])){
    header('location: ./connexion.php');
};

?>

<!DOCTYPE html>
<html>

<head>
    <title>Page d'accueil</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS de bootstrap et w3schools -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/accueil.css">
</head>

<body>
  <!-- Barre de Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="./accueil.php">Accueil</a>
    <a class="navbar-brand" href="./connexion.php">Connexion</a>
    <a class="navbar-brand" href="./inscription.php">Inscription</a>
    <a class="navbar-brand" href="./administration/index.php">Administration</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-span="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      </ul>
    </div>
  </nav>


<div class="w3-main w3-padding-large" style="margin-left:40%">

  <header class="w3-container w3-center" style="padding:128px 16px" id="home">
    <h1 class="w3-jumbo"><b>Ma page d'accueil</b></h1>
    <p>Projet CESI</p>
    <img src="img/logo-CESI.png" style="max-width: 100%;">
  </header>
  
<!-- END PAGE CONTENT -->
</div>

<script src="javascript/menu.js"></script>

</body>
</html>
