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

    $sql = "INSERT INTO aluno VALUES (DEFAULT, '$nome', '$cpf', '$email', '$senha', '$dataNasc', '$tel');";

    $result = $conn->query($sql);

    $sql = "SELECT idAluno, email, senha FROM aluno;";

    $result = $conn->query($sql);

    //$_SESSION['idAluno'] = $row['idAluno'];

    while($row = $result->fetch_assoc()) {
    echo $row['idAluno'];
    }
    echo "<p>salve</p>";

    //header("location:minhacontaaluno.php");


    $conn->close();

?>