<?php
    session_start();
    include_once "conect.php";
    $outgoing_id = $_SESSION['id'];
    $usuario = $_SESSION['usuario'];
    $id = $_SESSION['id'];
    $sql = "SELECT idProfessor, idAluno FROM aula WHERE NOT id = {$outgoing_id} ORDER BY user_id DESC";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "No users are available to chat";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }
    echo $output;
?>