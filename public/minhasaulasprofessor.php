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

    <h2>Minhas aulas</h2>

    <form class="minha-aula" action="" method="post">

        <div class="minhas-aulas-esquerda">

            <label for="">Seu nome:</label><br>
            <input type="text" class="minhas-aulas" name="" id="" placeholder="ex: João">

            <label for="">Aula:</label><br>
            <input type="text" class="minhas-aulas" name="" id="" placeholder="ex:#8">

            <label for="">Título da aula:</label><br>
            <input type="text" class="minhas-aulas" name="" id="" placeholder="ex:conjugação de verbos em francês">

        </div>

        <div class="minhas-aulas-direita">
            <label for="arquivo" class="arquivo">Enviar Arquivo</label>
            <input type="file" name="arquivo" id="arquivo">

            <select name="" id="" class="aula">
                <option value="">inglês</option>
                <option value="">francês</option>
            </select>

            <input type="submit" class="enviar-minhas-aulas" value="Enviar Aula">

        </div>



    </form>


</body>

</html>