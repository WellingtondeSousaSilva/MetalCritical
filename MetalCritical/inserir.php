<?php

    include_once 'conexao.php';

    $nome = isset($_POST['nome']) == true ? $_POST['nome']:"";
    $email = isset($_POST['email']) == true ? $_POST['email']:"";
    $senha = isset($_POST['senha']) == true ? $_POST['senha']:"";

    $sql = "INSERT INTO sistema_de_cadastro (nome_clie, email_clie, senha_clie) VALUES
          ('$nome', '$email', '$senha')";
    
    if($conn->query($sql) == true){

            header('location: home.php');
    }else{
            echo "Error" . $sql . "<br>" . $conn->error;
    }      

    $conn->close();
        

    ?>