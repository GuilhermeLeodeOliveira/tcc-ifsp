<?php

    session_start();
    require_once("conect.php");
    
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $nome=$_POST['nome'];
    $dataNasc=$_POST['dataNasc'];
    $cpf=$_POST['cpf'];
    $tel=$_POST['tel'];

    if(!empty($email) && !empty($senha) && !empty($nome) && !empty($dataNasc) && !empty($cpf) && !empty($tel)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $sql = mysqli_query($conn, "SELECT * FROM aluno WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){
                echo "$email - This email already exist!";
            }else{
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
                            if(move_uploaded_file($tmp_name,"images/".$new_img_name)){
                                $ran_id = rand(time(), 100000000);
                                $status = "Active now";
                                $encrypt_pass = base64_encode($senha);
                                $insert_query = mysqli_query($conn, "INSERT INTO users (idAluno, unique_id, nome, cpf, email, senha, dataNasc, telefone, img, status)
                                VALUES (DEFAULT, {$ran_id}, '{$nome}','{$cpf}', '{$email}', '{$encrypt_pass}', '{$dataNasc}', '{$new_img_name}', '{$status}')");
                                if($insert_query){
                                    $select_sql2 = mysqli_query($conn, "SELECT * FROM aluno WHERE email = '{$email}'");
                                    if(mysqli_num_rows($select_sql2) > 0){
                                        $result = mysqli_fetch_assoc($select_sql2);
                                        $_SESSION['unique_id'] = $result['unique_id'];
                                        echo "success";
                                    }else{
                                        echo "This email address not Exist!";
                                    }
                                }else{
                                    echo "Something went wrong. Please try again!";
                                }
                            }
                        }else{
                            echo "Please upload an image file - jpeg, png, jpg";
                        }
                    }else{
                        echo "Please upload an image file - jpeg, png, jpg";
                    }
                }
            }
        }else{
            echo "$email is not a valid email!";
        }
    }else{
        echo "All input fields are required!";
    }

    $senha=base64_encode($senha);



    if ($conn->connect_error) {
    
        die("Falha na conexão " . $conn->connect_error);
    
    }

    $sql = "INSERT INTO aluno VALUES (DEFAULT, '$nome', '$cpf', '$email', '$senha', '$dataNasc', '$tel');";

    $result = $conn->query($sql);

    $sql = "SELECT idAluno, email, senha FROM aluno;";

    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {

        if($row['email']==$email && $row['senha']==$senha){

            $_SESSION['idAluno'] = $row['idAluno'];
            header("location:minhacontaaluno.php");
        
        }  
    }

    $conn->close();

?>