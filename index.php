  <?php

    $nome =(isset($_POST['nome'])) ? $_POST['nome'] : ''; 
    $cognome =(isset($_POST['cognome'])) ? $_POST['cognome'] : ''; 
    $indirizzo =(isset($_POST['indirizzo'])) ? $_POST['indirizzo'] : ''; 

   print $nome;
   ?>
   
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Forms</title>

  </head>
  <body>
         
    <div class="container">
      <div class="alert alert-primary" role="alert">
        <?php
          foreach ($_POST as $key => $value) { 
            print $key . ': ' . $value . '<br>';
          }
        ?>
      </div>
      
      <form action="index.php" method="post">  
        <div class="form-group">
          <label for="nome">inserisci il tuo nome "o nomignolo"</label>
          <input type="text" class="form-control" id="nome" aria-describedby="nomeHelp" placeholder="Il Tuo nome :)">
          <small id="nomeHelp" class="form-text text-muted"> inserisci il tuo nome cosi sappiamo chi sei .)</small>
        </div>

        <div class="form-group">
          <label for="cognome">inserisci il tuo cognome "o quello che vuoi >:C"</label>
          <input type="text" class="form-control" id="cognome" aria-describedby="cognomeHelp" placeholder="Il Tuo cognome :)">
          <small id="surnameHelp" class="form-text text-muted">inserisci il cognome cosi abbiamo piu dati per trovarti</small>
        </div>

        <div class="form-group">
          <label for="indirizzo">inserisci il tuo indirizzo "</label>
          <input type="text" class="form-control" id="indirizzo" aria-describedby="indirizzoHelp" placeholder="Il Tuo indirizzo :)">
          <small id="surnameHelp" class="form-text text-muted">inserisci il tuo indirizzo cosi verremo a derubarti</small>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary">invia i tuoi dati >:)</button>
        </div>
      </form>
    </div>              
            
              


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min"></script>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap.min.js"></script>
  </body>
</html>