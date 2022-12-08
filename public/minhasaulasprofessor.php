<!DOCTYPE html>

<html lang="pt-br">

<?php

    require_once("conect.php");
    if ($conn->connect_error) {

        die("Falha na conexão " . $conn->connect_error);

    }

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

    <h2>Minhas aulas</h2>

    <form class="minha-aula" action="cadastrar-aula.php" method="post" enctype="multipart/form-data">

        <div class="minhas-aulas-esquerda">

            <label for="">Seu nome:</label><br>
            <input type="text" class="minhas-aulas" name="" id="" placeholder="ex: João">

            <label for="">Aula:</label><br>
            <input type="text" class="minhas-aulas" name="aula" id="" placeholder="ex:#8">

            <label for="">Título da aula:</label><br>
            <input type="text" class="minhas-aulas" name="titulo" id="" placeholder="ex:conjugação de verbos em francês">

        </div>

        <div class="minhas-aulas-direita">
            <label for="arquivo" class="arquivo">Enviar Arquivo</label>
            <input type="file" name="arquivo" id="arquivo" style="visibility: hidden;" accept="image/x-png,image/gif,image/jpeg,image/jpg">

            <select name="lingua" id="" class="aula">
                <?php 

                    $idProfessor = $_SESSION['id'];

                    $sql = "SELECT DISTINCT disciplina FROM aula WHERE idProfessor = $idProfessor";
                    $result = $conn->query($sql);

                    while($row = $result->fetch_assoc()) {

                ?>

                        <option value="<?php echo $row['disciplina'] ?>"><?php echo $row['disciplina'] ?></option>

                <?php

                    }

                ?>    
            
            </select>

            <select name="periodo" id="" class="aula mt-2 mb-2">

            <?php 

                $idProfessor = $_SESSION['id'];

                $sql = "SELECT DISTINCT periodo FROM aula WHERE idProfessor = $idProfessor";
                $result = $conn->query($sql);

                while($row = $result->fetch_assoc()) {

            ?>

                    <option value="<?php echo $row['periodo'] ?>"><?php echo $row['periodo'] ?></option>

            <?php

                }

            ?>    
            </select>


            <input type="submit" class="enviar-minhas-aulas" value="Enviar Aula">

        </div>



    </form>


    
</body>

</html>