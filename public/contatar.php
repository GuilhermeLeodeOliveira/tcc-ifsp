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

    <h1 style="text-align:center; color: #3299CC; font-size: 40; font-family: cursive;">Entrar em Contato</h1>
 

    <form class="contatar">

        <label form="txtNome">NOME:</label><br />
        <input type="text" name="firstname" id="txtNome" placeholder="Ex: João " required /> <br /> <br />

        <label form="txtNome">SOBRENOME:</label><br />
        <input type="text" name="name" id="txtNome" placeholder="Ex: dos Santos" required /> <br /> <br />

        <label form="NumeroTelefone">NÚMERO DE TELEFONE:</label><br />
        <input type="int" id="NumeroTelefone" placeholder="(11)91234-5678" /> <br /> <br />

        <label form="txtEmail">E-MAIL:</label><br />
        <input type="email" id="txtEmail" placeholder="joão@email.com" required /> <br /> <br />

        <label>ASSUNTO DO CONTATO:</label> <br />
        <select style="width: 150px;">
            <option>Sugestão</option>
            <option>Crítica</option>
            <option>Dúvida</option>
        </select>
        <br /> <br />

        
        <label>COMO PREFERE SER ATENDIDO?</label> <br />
        <select>
            <option>Email</option>
            <option>WhatsApp</option>
            <option>Telefone</option>
            <option>Página docClass</option>
        </select>
        <br /> <br />

       

        <label form="txtComentario">DEIXE AQUI SEU COMENTÁRIO, NÓS AGRADECEMOS:</label> <br />
        <textarea id="txtComentario" cols="50" rows="5" maxlength="225"></textarea>
        <br /> <br />

        <input type="submit" value="Enviar" />

    </form>
    <br>
    <?php include 'includes/footer.php' ?>

</body>

</html>