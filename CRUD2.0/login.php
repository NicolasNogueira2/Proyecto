<?php include("db.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>CRUD </title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  </head>
  <body>
  
    <nav class="navbar navbar-dark bg-dark">

      <div class="container">

        <a class="navbar-brand" href="index.php">Iniciar Sesion</a>
        
       </div>
    </nav>

<main class="container p-4">

      <div class="card card-body">
        <form action="comprueba_login.php" method="POST">

           <div class="form-group">
              <input type="email" name="login" class="form-control" placeholder="E-mail" required>
           </div>

           <div class="form-group">
              <input type="password" name="contra" class="form-control" placeholder="Contraseña" required>
           </div>
          <input type="submit" name="comprueba_login" class="btn btn-success btn-block" value="Iniciar Sesion">
        </form>
      </div>
    
</main>

<?php include('includes/footer.php'); ?>
</body>
</html>
