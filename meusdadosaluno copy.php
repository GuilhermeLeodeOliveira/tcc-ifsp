<?php

  session_start();
  require_once("conect.php");

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="IMG/favicon.ico" type="image/x-icon">

  <link rel="stylesheet" href="style/estilo.css">

  <title>Meus Dados</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">

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
            <a class="nav-link active" href="index.html">Home</a>
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
            <a class="nav-link active" href="login.html">Entrar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <h2 style="color: #3299CC;">Meus dados</h2>
  <div class="fundo-meus-dados-aluno">
    
    <div class="meus-dados-aluno-a"> <!--Lembrar de perguntar sobre a alteração que fiz no layout, se aprovarem devo apagar a classe dessa div e apagar no css-->
      
      <?php

        $senha = $_SESSION['senha'];
        
        $sql = "SELECT * FROM aluno WHERE senha = '$senha'";
        
        $result = $conn->query($sql);
        
        $i = 0;
        while($row = mysqli_fetch_array($result)){

      ?>

      <p><b>Nome Completo:</b><br>
      <?php echo $row['nome']; ?>
      
      </p>

      <p><b>CPF:</b><br>
      <?php echo $row['cpf']; ?>
      
      </p>

      <p><b>Telefone:</b><br>
      <?php echo $row['telefone']; ?>
      
      </p>

      <p><b>e-mail:</b><br>
      <?php echo $row['email']; ?>
      
      </p>

      <p><b>Data de Nascimento:</b><br>
      <?php echo $row['dataNasc']; ?>
      
      </p>
    
      <?php
            $i++;
        }
      ?>

    </div>
    
    <div class="linha-vertical"></div>
    
    <div class="meus-dados-aluno-b"><!--Lembrar de perguntar sobre a alteração que fiz no layout, se aprovarem devo apagar a classe dessa div e apagar no css-->
      
      <p><b>Disciplinas:</b><br>
        Alemão <br>
        Francês
      </p>

      <p><b>Mestres:</b><br>
        Jade M. <br>
        Dalton M.
      </p>

      <p><b>Período:</b><br>
        Alemão: 3º Período <br>
        Francês: 3º Período
      </p>

      <p><b>Média das Notas:</b><br>
        Alemão: 8,75 <br>
        Francês: 7,87
      </p>
  
    </div>
  
  </div>

</body>

</html>