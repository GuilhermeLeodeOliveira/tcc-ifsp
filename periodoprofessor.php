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
     <img src="IMG/gifs/1474.gif" alt="" width="100px">
     <div class="bolas">
        <div></div>
        <div></div>
        <div></div>                    
     </div>
  </div>
</div>
<!-- fim do preloader --> 

    <div class="container">

        <?php
            
            $idProfessor = $_SESSION['idProfessor'];
            

            $sql = "SELECT b.nome, a.periodo, a.materia from aula a
            LEFT JOIN aluno b ON b.idAluno = a.idAluno
            RIGHT JOIN professor p ON p.idProfessor = a.idProfessor
            WHERE p.idProfessor = '$idProfessor'";

            $result = $conn->query($sql);
            

        ?>

        <h2 style="color: #66edff;">1º Período</h2>

        <table>
            <tr>
                <th>Aluno</th>
                <th>1º Semestre</th>
                <th>2º Semestre</th>
            </tr>
            <?php
            
            $i = 0;
            while($row = mysqli_fetch_array($result)){
          
            
            ?>
            <tr>
                <td><?php echo $row['nome']; ?></td>
                <td>8/10</td>
                <td>Atribuir nota</td>
            </tr>

            <?php
                $i++;
            }
        ?>
        </table>

    </div>
</body>

</html>