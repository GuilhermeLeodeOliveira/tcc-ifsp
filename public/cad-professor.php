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

    <div class="container">

        <h1>Futuro professor docclass</h1>

        <form class="cad-cli" action="cadastrar-professor.php" method="post" enctype="multipart/form-data">

            <div class="cad-box-1 m-1 d-flex flex-column">

                <label class="mt-3" for="">Nome completo:</label>
                <input type="text" class="in-cad-cli" name="nome" id="" placeholder="Jade Albuquerque Miller">

                <label class="mt-3" for="">Data de nascimento:</label>
                <input type="date" class="in-cad-cli" name="dataNasc" id="" placeholder="03/09/2001">

                <label class="mt-3" for="">CPF:</label>
                <input type="text" class="in-cad-cli" name="cpf" id="cpf" placeholder="123.456.789-00">

                <label class="mt-3" for="">Telefone de contato:</label>
                <input type="text" class="in-cad-cli" name="tel" id="tel" placeholder="(11) 94002-8922">

            </div>

            <div class="cad-box-2 m-1 d-flex flex-column">

                <label class="mt-3" for="">Escolha uma Imagem</label>
                <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>


                <label class="mt-3" for="">E-mail:</label>
                <input type="email" class="in-cad-cli" name="email" id="" placeholder="jsilva@gmail.com">

                <label class="mt-3" for="">Senha:</label>
                <input type="password" class="in-cad-cli" name="senha" id="" placeholder="********">

                <label class="" for="">Disciplinas para lecionar:</label>
                <div class="d-flex justify-content-start">
                    <div class="m-1"><input type="checkbox" class="in-check" name="caixa[]" value="alemao" id=""> Alemão</div>
                    <div class="m-1"><input type="checkbox" class="in-check" name="caixa[]" value="arabe" id=""> Árabe</div>
                    <div class="m-1"><input type="checkbox" class="in-check" name="caixa[]" value="coreano" id=""> Coreano</div>
                </div>
                <div class="d-flex justify-content-start">
                    <div class="m-1"><input type="checkbox" class="in-check" name="caixa[]" value="espanhol" id=""> Espanhol</div>
                    <div class="m-1"><input type="checkbox" class="in-check" name="caixa[]" value="frances" id=""> Francês</div>
                    <div class="m-1"><input type="checkbox" class="in-check" name="caixa[]" value="ingles" id=""> Inglês</div>
                </div>
                <div class="d-flex justify-content-start">
                    <div class="m-1"><input type="checkbox" class="in-check" name="caixa[]" value="italiano" id=""> Italiano</div>
                    <div class="m-1"><input type="checkbox" class="in-check" name="caixa[]" value="japones" id=""> Japonês</div>
                    <div class="m-1"><input type="checkbox" class="in-check" name="caixa[]" value="mandarim" id=""> Mandarim</div>

                </div>

            </div>

            
            <input class="mt-4 btn-cad-cli cad-box-3" type="submit" value="enviar cadastro">

        </form>

    </div>


    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/jquery.mask.js"></script>
    <script src="js/mascara-cad-cli.js"></script>
</body>

</html>