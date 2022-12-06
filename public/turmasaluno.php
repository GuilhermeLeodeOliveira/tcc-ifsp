<?php


  require_once("conect.php");

?>
<!DOCTYPE html>

<html lang="pt-br">

<?php

include 'includes/head.php';

?>

<title>Minha Conta</title>
<body>

<?php

  include 'includes/navbar.php';

?>

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

        <h2>Turmas</h2>
        <div class="fundo-txt-turmas d-flex">
            <input class="txt-turmas" type="text" name="" id="" placeholder="Digite aqui...">
            <button class="btn-pesquisa-turmas" type="submit">aaa</button>
        </div>

        <?php
        
    
            $sql = "SELECT p.nome, p.dataNasc, a.disciplina, a.periodo FROM aula a
                    JOIN professor p ON p.idProfessor = a.idProfessor";
            
            $result = $conn->query($sql);

            while($row = $result->fetch_array()) { 
                $the_rows[] = $row; 
            }

            foreach($the_rows as $row){
        
        ?>

        <div class="turmas">

            <p class="dados"><b><?php echo $row['nome']; ?></b> <br>
            <?php echo $row['dataNasc']; ?> <br>
                <b><?php echo $row['disciplina']." ".$row['periodo']; ?></b> <br>
            </p>

            <button class="matricula" type="submit">MATRICULE-SE</button>

            <div class="foto">Foto</div>
                   
        </div>
        <?php
            }
        ?>

    </div>

</body>

</html>