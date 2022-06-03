<?php
    session_start(); // démarrer une session

    //fonction qui permet de prendre l'intégralité des utilisateurs ainsi que leurs infos pour les afficher ensuite sur la page
    function getUsers(){
    $db = new PDO('mysql:host=localhost;dbname=html','root','');
    $sql = "SELECT * FROM users ";
    $query = $db->prepare($sql);
    $query->execute();
    $result=$query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  // condition qui vérifie si un utilisateur est bien connecté
  if (!isset($_SESSION['identifiant'])){
    header('location:../connexion.php');
  } 
  // condition qui vérifie si l'utilisateur est bien admin
  elseif ($_SESSION['admin'] !== '1') {
    // si les 2 conditions sont bien réunies alors dirier vers la page admin
    header('location:index.php');
  } 

	$users = getUsers();
?>

<!doctype html>
  <html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Administration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="../css/admin.css" rel="stylesheet">
  </head>
    <body>

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="../accueil.php">Accueil</a>
        <a class="navbar-brand" href="../controller/disconnect.php">Se Déconnecter</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-span="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
          </ul>
        </div>
      </nav>

      <div class="exemple">
          <h1 class="title">Liste des utilisisateurs</h1>
          <form method="POST" action="addUser.php">
            <button class="button" type="submit">Ajouter un nouvel Utilisateur</button>
          </form>
          <ul style="width:80%;">
            <?php
              foreach($users as $user): extract($user);
            ?>
              <table>
                <hr>
                  <ul id="<?php echo $id ?>" style="display: flex; justify-content: space-between;">
                    <span>Identifiant: <?php echo $identifiant ?></span>
                    <div style="display: flex;">
                      <form method="POST" action="./updateUser.php">
                        <button class="button" type="submit" name="id" value="<?php echo $id ?>">Modifier</button>
                      </form>
                      <form method="POST" action="../controller/deleteUser.php" style="width:250px;">
                        <button class="button" type="submit" name="id" value="<?php echo $id ?>">Supprimer</button>
                      </form>
                    </div>
                  </ul>
                </hr>
              </table>
            <?php endforeach; ?>
        </ul>
      </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>