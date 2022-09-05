<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">

        <marquee behavior="slide" direction="up">
          <img class="logo" src="IMG/Logo.png" width="100%" alt="Logo da Empresa" />
        </marquee>

      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav">

          <li class="nav-item ">
            <a class="nav-link active" href="index.php">Home</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" href="portal.html">Acesse o nosso portal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="contatar.html">Entre em contato</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" href="maisdaequipe.html">Mais sobre nós</a>
          </li>

          <li>
            <a class="nav-link active" href="login.php">Entrar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<?php
  
  include 'includes/footer.php';

?>

</body>
</html>