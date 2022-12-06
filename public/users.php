<?php 
  session_start();
  include_once "conect.php";
  
?>
<?php include_once "includes/head.php"; ?>

<head>
  <title>Chat</title>
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $usuario = $_SESSION['usuario'];
            $id = $_SESSION['id'];
          
            $sql = "SELECT * FROM $usuario WHERE id"."$usuario = $id";
            
            $result = $conn->query($sql);

            if(mysqli_num_rows($result) > 0){
              $row = mysqli_fetch_assoc($result);
            }

          ?>
          <img src="IMG/usuarios/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['nome'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a href="php/logout.php?logout_id=<?php echo $id; ?>" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>

</body>
</html>
