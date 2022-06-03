<?php 
  function getUserById($id){
      $db = new PDO('mysql:host=localhost;dbname=html','root','');
      $sql = "SELECT * FROM users where id= '$id'";
      $query = $db->prepare($sql);
      $query->execute();
      $result=$query->fetch(PDO::FETCH_ASSOC);
      
  return $result;
  }
  $user = getUserById($_POST['id']);
?>

<form class="formulaire" action="../controller/updateUser.php" method="post">
  <div>
    <span for="exampleFormControlInput3">Identifiant : </span>
    <input type="text" name="identifiant" value="<?php echo $user["identifiant"] ?>" class="form-control" id="exampleFormControlInput3" placeholder="Entrez votre identifiant">
  </div>
  <div>
    <span for="exampleFormControlInput4">Mot de passe: </span>
    <input type="password" name="password" value="<?php echo $user["mdp"] ?>" class="form-control" id="exampleFormControlInput4" placeholder="Entrez un mot de passe">
  </div>
  <input type="hidden" name="id" value="<?php echo $_POST['id'] ?>">
  <div class="formButton">
      <button type="submit"  class="btn btn-primary">Envoyer</button>
  </div>
</form>

<style>
  .title{
  color: blue;
  font-size: 25px;
  font-family: Georgia, 'Times New Roman', Times, serif;
  text-transform: uppercase;
}
.subtitle {
  font-size: 16px;
  text-transform: capitalize;
}
.formulaire {
  margin-top: 30px;
}

.formulaire > div{
    margin-bottom: 20px;
    width: 600px;
    display: flex;
}

.formulaire > div > span{
  width: 150px;
}

.formButton{
  display: flex;
  justify-content: center;
  width: 100%;
}

@media screen and (max-width: 768px)
{
    .title{
      color: green;
    }
    .formulaire > div{
      display: flex;
      flex-direction: column;
    }
    .exemple{
      margin-top: 66px;
    }
    h5{
      padding: 1em;
    }
}
</style>