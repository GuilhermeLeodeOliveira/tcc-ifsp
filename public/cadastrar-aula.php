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

        $extensions = ["jpeg", "png", "jpg", "pdf", "mp4", "mp3"];
            
        if(in_array($arquivo_ext, $extensions) === true){
            
            $types = ["arquivo/jpeg", "arquivo/jpg", "arquivo/png", "arquivo/pdf", "arquivo/mp4", "arquivo/mp3"];
            
            
                $time = time();
                $new_arquivo_name = $time.$arquivo_name;
            
                if(move_uploaded_file($tmp_name,"aulas/".$new_arquivo_name)){

                    $sql = "SELECT idAula FROM aula WHERE disciplina = $lingua AND periodo = $periodo";

                    $result = $conn->query($sql);

                    $idAula = $result;

                    $sql = "INSERT INTO atividade VALUES (DEFAULT, '$aula', '$titulo', '$new_arquivo_name', '$idAula');";

                    $result = $conn->query($sql);

                }else{
                    echo "não deu";
                }

            }
        }
    header("Location:minhasaulasprofessor.php");
?>