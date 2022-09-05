const teste = document.querySelector("#periodo$periodo-$disciplina")

teste.addEventListener("click", function(e){1

    e.preventDefault();

    document.getElementById("#teste").innerHTML = "<?php $_SESSION['periodoEscolhido']=$periodo; echo aqui; ?>";
    //document.getElementById("#teste").innerHTML += "<?php $_SESSION['disciplinaEscolhida']=$disciplina; ?>";

});
