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
        <?php if (empty($nome)): ?>
          <!-- codice condizione vera -->
        <?php else: ?>
          <!-- codice condizione falsa -->

        <?php endif; ?>
        
        <div class="alert alert-primary" role="alert">
          <ul>
            <?php
              foreach ($_POST as $key => $value) { 
                print '<li>' . $key . ': ' . $value . '</li>';
               }
              ?>
          </ul>
        </div>
        <form action="index.php" method="post">  
          <div class="form-group">
            <label for="nome">inserisci il tuo nome</label>
            <input type="text" class="form-control" id="nome" aria-describedby="nomeHelp" placeholder="Il Tuo nome :)">
            <small id="nomeHelp" class="form-text text-muted"> inserisci il tuo nome cosi sappiamo chi sei</small>
          </div>
          <div class="form-group">
            <label for="cognome">inserisci il tuo cognome</label>
            <input type="text" class="form-control" id="cognome" aria-describedby="cognomeHelp" placeholder="Il Tuo cognome :)">
            <small id="surnameHelp" class="form-text text-muted">inserisci il cognome cosi abbiamo piu dati per trovarti</small>
          </div>
          <div class="form-group">
            <label for="indirizzo">inserisci il tuo indirizzo "</label>
            <input type="text" class="form-control" id="indirizzo" aria-describedby="indirizzoHelp" placeholder="Il Tuo indirizzo :)">
            <small id="surnameHelp" class="form-text text-muted">inserisci il tuo indirizzo cosi veniamo a derubarti</small>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">invia i tuoi dati</button>
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