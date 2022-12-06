<?php

    session_start();
    require_once("conect.php");
    
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $nome=$_POST['nome'];
    $dataNasc=$_POST['dataNasc'];
    $cpf=$_POST['cpf'];
    $tel=$_POST['tel'];
    $caixa = (isset($_POST['caixa'])) ? $_POST['caixa'] : array();
    /*
    if (count($caixa) > 0) {
        foreach ($caixa as $caixa) { 
            echo $caixa .' '; 
        } 
    } else {
        echo "No skill has been selected";
    }
*/
    $senha=base64_encode($senha);

    if ($conn->connect_error) {
    
        die("Falha na conexão " . $conn->connect_error);
    
    }

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
                 
                    $sql = "INSERT INTO professor VALUES (DEFAULT, '$nome', '$cpf', '$email', '$senha', '$dataNasc', '$tel',  '$new_img_name', '$status');";

                    $result = $conn->query($sql);

                    
                    $sql = "SELECT idProfessor, email, senha FROM professor;";

                    $result = $conn->query($sql);

                    while($row = $result->fetch_assoc()) {

                        if($row['email']==$email && $row['senha']==$senha){

                            $_SESSION['id'] = $row['idProfessor'];
                            $_SESSION['usuario'] = "Professor";
                            $idProfessor= $row['idProfessor'];

                            if (count($caixa) > 0) {
                                foreach ($caixa as $caixa) { 
                                    for($i=1; $i<4; $i++){
                                        
                                        $sql = "INSERT INTO aula VALUES (DEFAULT, '$caixa', $i, '$idProfessor', 0);";
                                        $result = $conn->query($sql);
                                    
                                    }
                                    
    
                                } 
                            }
                            
                            
                            header("location:minhacontaprofessor.php");
                        
                        }  
                    }
                }
            }
        }
    }
        

    $conn->close();

?>