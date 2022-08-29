<?php

  session_start();
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
    <div class="container">

        <h2 style="color: #66edff;">Turmas</h2>
        <div class="fundo-txt-turmas d-flex">
            <input class="txt-turmas" type="text" name="" id="" placeholder="Digite aqui...">
            <button class="btn-pesquisa-turmas" type="submit">aaa</button>
        </div>

        <?php
            $idAluno = $_SESSION['idAluno'];
    
            $sql = "SELECT * FROM professor";
            
            $result = $conn->query($sql);

            while($row = $result->fetch_array()) { 
                $the_rows[] = $row; 
            }

            foreach($the_rows as $row){
        
        ?>

        <div class="turmas">

            <p class="dados"><b><?php echo $row['nome']; ?></b> <br>
                27 anos <br>
                <b>Francês</b> <br>
                PREÇO R$00,00
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