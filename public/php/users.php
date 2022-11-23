<?php
    session_start();
    include_once "conect.php";
    $outgoing_id = $_SESSION['id'];
    $idUsuario = "id";
    $idUsuario .= $_SESSION['usuario'];
    $usuario = $_SESSION['usuario'];

    if($usuario == "Aluno"){

        $sql = "SELECT p.idProfessor, p.nome, p.img, p.status FROM aula a 
        JOIN aluno b ON a.idAluno = b.idAluno
        JOIN professor p ON p.idProfessor = a.idProfessor
        WHERE b.idAluno = $outgoing_id";
        
    }else if($usuario == "Professor"){
        
        $sql = "SELECT b.idAluno, b.nome, b.img, b.status FROM aula a 
        JOIN aluno b ON a.idAluno = b.idAluno
        JOIN professor p ON p.idProfessor = a.idProfessor
        WHERE p.idProfessor = $outgoing_id";
        
    }
    
    $query = $conn->query($sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "No users are available to chat";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }
    echo $output;
?>