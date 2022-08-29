<?php

    session_start();
    require_once("conect.php");
    
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    
    //$senha=base64_encode($senha);

    if ($conn->connect_error) {
    
        die("Falha na conexão " . $conn->connect_error);
    
    }

    $sql = "SELECT idAluno, email, senha FROM aluno;";
    
    $result = $conn->query($sql);  // aqui
    
    while($row = $result->fetch_assoc()) {

        if($row['email']==$email && $row['senha']==$senha){

            $_SESSION['idAluno'] = $row['idAluno'];
            header("location:minhacontaaluno.php");
        
        }  
    }

    $sql = "SELECT email, senha FROM professor;";

    $result = $conn->query($sql);  // aqui

    while($row = $result->fetch_assoc()) {

        if($row['email']==$email && $row['senha']==$senha){

            $_SESSION['idProfessor'] = $row['idProfessor'];

            header("location:minhacontaprofessor.html");
        
        }     
    }

    echo"USUÁRIO NÃO ENCONTRADO!";

    $conn->close();

?>