<?php
    session_start();
    require_once("conect.php");
    if ($conn->connect_error) {
    
        die("Falha na conexão " . $conn->connect_error);
    
    }

    $nomeProf = $_GET['nome'];
    $disciplina = $_GET['disciplina'];
    $periodo = $_GET['periodo'];
    $idAluno = $_SESSION['id'];
    $sql = "SELECT p.idProfessor FROM aula a
            JOIN professor p ON p.idProfessor = a.idProfessor
            WHERE p.nome = '$nomeProf' AND a.disciplina = '$disciplina' AND a.periodo = '$periodo'";


    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        $idProfessor = $row['idProfessor'];
    }

    $sql = "INSERT INTO aula VALUES (DEFAULT, '$disciplina', '$periodo', $idProfessor, $idAluno);";


    $result = $conn->query($sql);


    header("location:turmasaluno.php");

?>