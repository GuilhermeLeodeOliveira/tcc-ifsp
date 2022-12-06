<?php

  require_once("conect.php");

  

?>
<!DOCTYPE html>

<html lang="pt-br">

<?php

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

  <h2>Meus dados</h2>
  <div class="fundo-meus-dados">
    
    <div class="meus-dados-a"> <!--Lembrar de perguntar sobre a alteração que fiz no layout, se aprovarem devo apagar a classe dessa div e apagar no css-->
      
      <?php

        $idProfessor = $_SESSION['id'];
        
        $sql = "SELECT * FROM professor
        WHERE idProfessor = '$idProfessor'";
        
        $result = $conn->query($sql);
        
        $i = 0;
        while($row = mysqli_fetch_array($result)){

      ?>

      <p><strong>Nome Completo:</strong><br>
      <?php echo $row['nome']; ?>
      
      </p>

      <p><strong>CPF:</strong><br>
      <?php echo $row['cpf']; ?>
      
      </p>

      <p><strong>E-mail:</strong><br>
      <?php echo $row['email']; ?>
       
      </p>
      
      <p><strong>Telefone:</strong><br>
      <?php echo $row['telefone']; ?>
      
      </p>

      <p><strong>Data de Nascimento:</strong><br>
      <?php echo $row['dataNasc']; ?>
      
      </p>
    
      <?php
            $i++;
        }
      
      ?>

    </div>
    
    <div class="linha-vertical"></div>
    
    <div class="meus-dados-b"><!--Lembrar de perguntar sobre a alteração que fiz no layout, se aprovarem devo apagar a classe dessa div e apagar no css-->
      
      <?php

        $sql = "SELECT a.disciplina, a.periodo FROM aula a
                JOIN professor p ON a.idProfessor = p.idProfessor
                WHERE p.idProfessor = '$idProfessor'";

        $result = $conn->query($sql);
        
        while($row = $result->fetch_array()) { 
          $the_rows[] = $row; 
        }
        
        
      ?>

      <p><strong>Disciplinas:</strong><br>
        <?php 
          // later use like:
          $i=1;
          if(!empty($the_rows)){
            foreach($the_rows as $row){
              echo $row['disciplina'].": ".$row['periodo']."º periodo<br>";
              $i++;
            }
          } 

        ?> 
        
      </p>

      
      <p><strong>Média dos alunos:</strong><br>
        <?php ?>
        
      </p>

        

    </div>
  
  </div>
  
</body>

</html>