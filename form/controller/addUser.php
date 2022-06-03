<?php
  function addUser(){
    if($_POST['identifiant'] !== '' && $_POST['psw'] !== ''){
      $login = $_POST['identifiant'];
      $pwd = $_POST['psw'];
      $db = new PDO('mysql:host=localhost;dbname=html','root','');
      $checkUserRequest = "SELECT * FROM `users` WHERE identifiant = '$login'";
      $checkUserQuery = $db->prepare($checkUserRequest);
      $checkUserQuery->execute();
      $result=$checkUserQuery->fetch(PDO::FETCH_ASSOC);
      if($result){
        header('Location: ../inscription.php?error=identifiant');
      }else{
        $sql = "INSERT INTO `users` (identifiant, mdp) VALUES ('$login', '$pwd')";
        $query = $db->prepare($sql);
        $result = $query->execute();
        // si la saisie est réussie alors aller vers cette page
        if($result){
          header('Location: ../administration/index.php');
        // sinon afficher erreur 
        }else{
          header('Location: ../administration/index.php?error=create');
        }
      }
    }else{
      header('Location: ../administration/index.php?error=form');
    }
  }
  addUser();
?>