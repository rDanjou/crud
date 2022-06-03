<?php
  function createUser(){
    if($_POST['identifiant'] !== '' && $_POST['psw'] !== ''){
      $login = $_POST['identifiant'];
      $pwd = $_POST['psw'];
      $db = new PDO('mysql:host=localhost;dbname=html','root',''); // connexion à la base de données
      $checkUserRequest = "SELECT * FROM `users` WHERE identifiant = '$login'"; // requête SQL pour vérifier si l'utilisateur est déjà enregistré en base
      $checkUserQuery = $db->prepare($checkUserRequest);
      $checkUserQuery->execute();
      $result=$checkUserQuery->fetch(PDO::FETCH_ASSOC);
      //si l'utilisateur existait déjà afficher erreur
      if($result){
        header('Location: ../inscription.php?error=identifiant');
      //sinon sasir en base 
      }else{
        $sql = "INSERT INTO `users` (identifiant, mdp, admin) VALUES ('$login', '$pwd', '0')";
        $query = $db->prepare($sql);
        $result = $query->execute();
        //une fois l'user crée se diriger vers cette page
        if($result){
          header('Location: ../accueil.php');
        // sinon afficher erreur
        }else{
          header('Location: ../inscription.php?error=create');
        }
      }
    }else{
      header('Location: ../inscription.php?error=form');
    }
  }
  createUser();
?>