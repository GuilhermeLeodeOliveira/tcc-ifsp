<?php

    session_start();
    require_once("conect.php");
    
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $nome=$_POST['nome'];
    $dataNasc=$_POST['dataNasc'];
    $cpf=$_POST['cpf'];
    $tel=$_POST['tel'];

    $senha=base64_encode($senha);

    if ($conn->connect_error) {
    
        die("Falha na conexão " . $conn->connect_error);
    
    }

    $sql = "INSERT INTO professor VALUES (DEFAULT, '$nome', '$cpf', '$email', '$senha', '$dataNasc', '$tel');";

    $result = $conn->query($sql);

    $sql = "SELECT idProfessor, email, senha FROM professor;";

    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {

        if($row['email']==$email && $row['senha']==$senha){

            $_SESSION['idProfessor'] = $row['idProfessor'];
            header("location:minhacontaprofessor.php");
        
        }  
    }

    $conn->close();

?>