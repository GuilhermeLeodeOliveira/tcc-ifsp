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

    $sql = "SELECT email, senha FROM aluno";
    
    $result = $conn->query($sql);  // aqui
    
    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
    
            if($row['email']==$email && $row['senha']==$senha){

                header("location:minhacontadoaluno.html");
            
            } else {
    
                echo"Usuário não encontrado";
            
            }        
        }

    } else {

        echo"Erro!";
    
    }

    $conn->close();


?>