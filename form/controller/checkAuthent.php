<?php
  
  session_start(); // démarrage de la session

  function checkAuthent(){
    if($_POST['identifiant'] !== '' && $_POST['psw'] !== ''){
      $login = $_POST['identifiant'];
      $pwd = $_POST['psw'];
      try {
        $db = new PDO('mysql:host=localhost;dbname=html','root','');
        $sql = "SELECT * FROM `users` WHERE identifiant = '$login' AND mdp = '$pwd'";
        $query = $db->prepare($sql);
        $query->execute();
        $result=$query->fetch(PDO::FETCH_ASSOC);
        if($result){
        // on se rend sur cette page si la connexion est réussie
          header('Location: ../administration/index.php');
        // on ajoute ses infos en tant que variables de session
          $_SESSION['id'] = $result['id'];
          $_SESSION['identifiant'] = $login;
          $_SESSION['psw'] = $mdp;
          $_SESSION['admin'] = $result['admin'];
        } else {
            header('Location: ../connexion.php?error=ids');
          }
      } 
      catch (PDOException $e){
        exit($e->getMessage());
      }
    }

    else{
      header('Location: ../connexion.php?error=form');
    }
  }
  checkAuthent();
?>