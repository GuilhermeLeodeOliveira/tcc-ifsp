<?php

    session_start();
    require_once("conect.php");
    
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $_SESSION['senha'] = $senha;
    //$senha=base64_encode($senha);

    if ($conn->connect_error) {
    
        die("Falha na conexão " . $conn->connect_error);
    
    }

    $sql = "SELECT email, senha FROM aluno;";
    
    $result = $conn->query($sql);  // aqui
    
    while($row = $result->fetch_assoc()) {

        if($row['email']==$email && $row['senha']==$senha){

            header("location:aluno/minhaconta.html");
        
        }  
    }

    $sql = "SELECT email, senha FROM professor;";

    $result = $conn->query($sql);  // aqui

    while($row = $result->fetch_assoc()) {

        if($row['email']==$email && $row['senha']==$senha){

            header("location:professor/minhaconta.html");
        
        }     
    }

    echo"USUÁRIO NÃO ENCONTRADO!";

    $conn->close();

?>