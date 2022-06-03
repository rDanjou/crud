
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS provenant de w3schools ainsi que bootstrap -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/signin.css">
        
        <title>Page de Connexion</title>
    
    </head>
    <body>
      
        <form action="./controller/checkAuthent.php" method="POST">
            <div class="container">
              <h1>Se connecter</h1>

              <label for="identifiant"><b>Identifiant</b></label>
              <input type="text" placeholder="Entrez votre identifiant" name="identifiant" id="identifiant" required>
          
              <label for="psw"><b>Mot de Passe</b></label>
              <input type="password" placeholder="Entrez votre Mot de Passe" name="psw" id="psw" required>

              <button type="submit" name="login" class="signinbtn">S'inscrire</button>
            </div>
            <div class="container signin">
                <p>Vous n'avez pas encore de compte ? <a href="inscription.php">Inscrivez-vous</a>.</p>
              </div>
        </form>
    
    </body>

</html>