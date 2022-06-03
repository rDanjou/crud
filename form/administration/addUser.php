<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="../css/addUser.css">
    
</head>


<body>

<form class="formulaire" action="../controller/addUser.php" method="POST">
  <div>
    <span for="exampleFormControlInput3">Identifiant : </span>
    <input type="text" name="identifiant" id="identifiant" class="form-control" id="exampleFormControlInput3" placeholder="Entrez votre identifiant">
  </div>
  <div>
    <span for="exampleFormControlInput4">Mot de passe: </span>
    <input type="password" name="password" id="psw" class="form-control" id="exampleFormControlInput4" placeholder="Entrez un mot de passe">
  </div>
  <div class="formButton">
      <button type="submit"  class="btn btn-primary">Envoyer</button>
  </div>
</form>

</body>
