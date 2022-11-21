<!DOCTYPE html>

<html lang="pt-br">

<?php

session_start();
require_once("conect.php");
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

    <h2 style="color: #66edff;">Minha conta</h2>

    <div class="cont-aluno">

        <a href="meusdadosaluno.php" class="box-1 box">MEUS DADOS</a>
        <a href="" class="box-2 box">MINHAS AULAS</a>
        <a href="desempenhoaluno.html" class="box-3 box">DESEMPENHO</a>
        <a href="turmasaluno.php" class="box-4 box">TURMAS</a>
        <a href="" class="box-5 box">ATIVIDADES</a>

    </div>
</body>

</html>