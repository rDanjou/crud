<?php
  function updateUser(){
    if($_POST['identifiant'] !== '' && $_POST['password'] !== ''){
      $login = $_POST['identifiant'];
      $pwd = $_POST['password'];
      $id = intval($_POST["id"]);
      $db = new PDO('mysql:host=localhost;dbname=html','root',''); // connexion à la base de données
      //requête SQL où on remplace les anciennes valeurs par les nouvelles
      $sql = "UPDATE users
      SET
          identifiant = :identifiant,
          mdp = :mdp
      WHERE id = :id";
      $valeur = array(
          'identifiant' => $login,
          'mdp' => $pwd,
          'id' => $id
      );
      $query = $db->prepare($sql);
      $result = $query->execute($valeur);
      //si la mise à jour des données est réussie alors aller vers cette page
      if($result){
        header('Location: ../administration/index.php');
      // sinon afficher erreur
      }else{
        header('Location: ../administration/updateUser.php?error=update&id='.$_POST["id"]);
      }
    }else{
      header('Location: ../administration/updateUser.php?error=form&id='.$_POST["id"]);
    }
  }
  updateUser();
?>