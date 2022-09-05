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


    <div class="container">
        <h2 style="color: darkgoldenrod;">
            Login
        </h2>

        <form action="entrada-login.php" class="login" method="post">
            <div class="formulario">
                <label for="">E-mail:</label>
                <input type="email" name="email" id="" placeholder="joaosilva@gmail.com">
            </div>
            <br>
            <div class="formulario">
                <label for="">Senha:</label>
                <input type="password" name="senha" id="" placeholder="********">
            </div>
            <br>
            <input type="submit" value="ENTRAR">

        </form>

        <div class="final-login">
            <p class="final-login-cadastro">Não tem uma conta? <br>
                Faça o seu cadastro</p>
            <a class="cadastro" href="cadastro.html">CADASTRO</a>
        </div>
    </div>


</body>

</html>