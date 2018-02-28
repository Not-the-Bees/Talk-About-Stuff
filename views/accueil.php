<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <title>Register / Login</title>
  </head>

  <!-- Banner -->
  <body class="background_color">
    <header class="banner">
        <h1 class="title">Talk About Stuff</h1>
    </header>

    <section class="container-fluid">
      <section class="row">
        <!-- Login Form -->
        <div class="col-sm-12 col-md-6 col-lg-6">
          <h2 class="title">Authentification</h2>
          <form action="login.php" method="post">
            <label>Votre Login :</label>
            <input type="text" name="login">
            <br />
            <br />
            <label>Votre mot de passe :</label>
            <input type="password" name="password"><br />
            <input type="submit" name="connect" value="Connexion">
          </form>
        </div>

        <!-- Register Form -->
        <div class="col-sm-12 col-md-6 col-lg-6">
          <h2 class="title">Nouvel utilisateur, c'est par ici :</h2>
          <form action="login.php" method="post">
            <label>Votre nom d'utilisateur :</label>
            <input type="text" name="username">
            <br />
            <br />
            <label>Votre Login (utilisé pour la connexion au site) :</label>
            <input type="text" name="login">
            <br />
            <br />
            <label>Mot de passe :</label>
            <input type="password" name="password"><br />
            <br />
            <br />
            <label>Confirmation du mot de passe :</label>
            <input type="password" name="password"><br />
            <br />
            <br />
            <label>Adresse mail :</label>
            <input type="mail" name="email"><br />
            <input type="submit" name="register" value="Register">
          </form>
      </section>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>