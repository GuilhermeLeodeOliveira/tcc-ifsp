<!DOCTYPE html>

<html lang="pt-br">

<?php
 session_start();
 require_once("conect.php");

include 'includes/head.php';

?>

<title>docClass.com</title>
<body>

<?php

  include 'includes/navbar.php';

?>

<body>

 <!-- início do preloader -->
 <div id="preloader">
  <div class="inner">
     <!-- HTML DA ANIMAÇÃO MUITO LOUCA DO SEU PRELOADER! -->
     <img src="IMG/gifs/teste.gif" alt="">
     <div class="bolas">
        <div></div>
        <div></div>
        <div></div>                    
     </div>
  </div>
</div>
<!-- fim do preloader --> 

    <div class="container">

        <h2 style="color: #66edff;">Turmas</h2>
        <div class="fundo-txt-turmas d-flex">
            <input class="txt-turmas" type="text" name="" id="" placeholder="Digite aqui...">
            <button class="btn-pesquisa-turmas" type="submit">aaa</button>
        </div>

        <?php

            $idProfessor = $_SESSION['idProfessor'];

            $sql = "SELECT periodo, disciplina FROM aula a
            JOIN professor p ON a.idProfessor = p.idProfessor
            WHERE p.idProfessor = '$idProfessor'";

            $result = $conn->query($sql);

            
            $i = 0;
            while($row = mysqli_fetch_array($result)){
          
        ?>

        <div class="fundo-turmas-professor">
        <?php 
        $periodo=  $row['periodo']; 
        $disciplina = $row['disciplina'];

        echo"<h3 class='periodo'>".$row['periodo']."º Período <br>".$row['disciplina']."</h3>"; ?></h3>
            <?php echo"<a href='periodoprofessor.php' class='ver-turma' id='periodo$periodo-$disciplina'>VER TURMA</a>"; ?>
        </div>

        <?php
                $i++;
            }
        ?>

            

    </div>
</body>

</html>