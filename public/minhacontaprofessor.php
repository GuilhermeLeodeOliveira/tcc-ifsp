<!DOCTYPE html>

<html lang="pt-br">

<?php

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

    <h2>Minha conta</h2>

    <div class="cont-professor">

        <a href="meusdadosprofessor.php" class="box-6 box">MEUS DADOS</a>
        <a href="minhasaulasprofessor.php" class="box-7 box">MINHAS AULAS</a>
        <a href="turmasprofessor.php" class="box-8 box">TURMAS</a>
        <a href="turmasprofessor2.php" class="box-9 box">ATIVIDADES</a>
        <a href="users.php" class="box-10 box">CHATS</a>

    </div>


    
</body>

</html>