<?php

    session_start();
    require_once("conect.php");
    if ($conn->connect_error) {
    
        die("Falha na conexão " . $conn->connect_error);
    
    }

    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $nome=$_POST['nome'];
    $dataNasc=$_POST['dataNasc'];
    $cpf=$_POST['cpf'];
    $tel=$_POST['tel'];

    
    if(isset($_FILES['image'])){

        $img_name = $_FILES['image']['name'];
        $img_type = $_FILES['image']['type'];
        $tmp_name = $_FILES['image']['tmp_name'];
        
        $img_explode = explode('.',$img_name);
        $img_ext = end($img_explode);

        $extensions = ["jpeg", "png", "jpg"];
        
        if(in_array($img_ext, $extensions) === true){
        
            $types = ["image/jpeg", "image/jpg", "image/png"];
        
            if(in_array($img_type, $types) === true){
        
                $time = time();
                $new_img_name = $time.$img_name;
        
                if(move_uploaded_file($tmp_name,"IMG/usuarios/".$new_img_name)){
        
                    $status = "Active now";
                    
                    $senha=base64_encode($senha);
                 
                    $sql = "INSERT INTO aluno VALUES (DEFAULT, '$nome', '$cpf', '$email', '$senha', '$dataNasc', '$tel',  '$new_img_name', '$status');";

                    $result = $conn->query($sql);

                    
                    
                    $sql = "SELECT idAluno, email, senha FROM aluno;";

                    $result = $conn->query($sql);

                    while($row = $result->fetch_assoc()) {

                        if($row['email']==$email && $row['senha']==$senha){
                            
                            $_SESSION['id'] = $row['idAluno'];
                            $_SESSION['usuario'] = "aluno";

                            header("location:minhacontaaluno.php");
                        
                        }  
                    }
                }
            }
        }
    }
                
    

    $conn->close();

?>