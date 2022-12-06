<?php

    session_start();
    require_once("conect.php");
    if ($conn->connect_error) {

        die("Falha na conexão " . $conn->connect_error);

    }

    
    $aula=$_POST['aula'];
    $titulo=$_POST['titulo'];
    $lingua=$_POST['lingua'];
    $periodo=$_POST['periodo'];

    if(isset($_FILES['arquivo'])){

        $arquivo_name = $_FILES['arquivo']['name'];
        $arquivo_type = $_FILES['arquivo']['type'];
        $tmp_name = $_FILES['arquivo']['tmp_name'];
        
        $arquivo_explode = explode('.',$arquivo_name);
        $arquivo_ext = end($arquivo_explode);

        $time = time();
        $new_arquivo_name = $time.$arquivo_name;

        if(move_uploaded_file($tmp_name,"aulas/".$new_arquivo_name)){

            $sql = "INSERT INTO aluno VALUES (DEFAULT, '$nome', '$cpf', '$email', '$senha', '$dataNasc', '$tel',  '$new_arquivo_name', '$status');";

            $result = $conn->query($sql);


        }

    }
?>