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
            <button class="btn-pesquisa-turmas" type="submit"><img src="IMG/icons8-pesquisar-30.png" height="100%" width="100%" style="border-radius: 20px;"alt=""></button>
        </div>

        <?php
        
        $idAluno = $_SESSION['id'];

        $sql = "SELECT a.disciplina, a.periodo FROM aula a
            JOIN aluno b ON b.idAluno = a.idAluno";

    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        $disciplina = $row['disciplina'];
        $periodo = $row['periodo'];
    }
    
            $sql = "SELECT p.nome, p.dataNasc, a.disciplina, a.periodo, p.img FROM aula a
                    JOIN professor p ON p.idProfessor = a.idProfessor
                    WHERE a.idAluno != '$idAluno' AND a.periodo != '$periodo' OR a.disciplina != '$disciplina'";

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

            <a class="matricula" href="matricula.php?nome=<?php echo $row['nome']?>&disciplina=<?php echo $row['disciplina']?>&periodo=<?php echo $row['periodo'] ?>">MATRICULE-SE</a>

            <div class="foto"><img src="IMG/usuarios/<?php echo $row['img'] ?>" class="foto" width="100%" height="100%" style="border-radius: 100%;" alt=""></div>
                   
        </div>
        <?php
            }
        ?>

    </div>
    

    
</body>

</html>