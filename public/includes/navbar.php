<?php
include_once('conect.php');
session_start();
include_once('includes/head.php');
if(!isset($_SESSION['id'])){

  echo "<script>console.log('Bem Vindo à docClass')</script>";

}else{

  $id = ($_SESSION['id']);
  $usuario = $_SESSION['usuario'];
  $sqlSelect = "SELECT * FROM $usuario WHERE id$usuario= $id";
  $result = $conn->query($sqlSelect);

  while ( $row = mysqli_fetch_assoc($result)) {
      $nome = $row['nome'];
  }

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light p-0">
    <div class="container-fluid p-0">
      <a class="navbar-brand p-0" href="index.php">

        <marquee behavior="slide" direction="up">
          <img class="logo" src="IMG/Logo.png"  alt="Logo da Empresa" />
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
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Meu perfil</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php if(!isset($_SESSION['id'])){echo "<a class='dropdown-item' href='login.php'>Entrar</a>";}else{ echo "<a class='dropdown-item' href='minhaconta$usuario.php'> Minha Conta </a>";?></a>
            <a class="dropdown-item" href="logout.php">Sair</a>
            <?php } ?>
          </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<?php
  
  include 'includes/footer.php';

?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>