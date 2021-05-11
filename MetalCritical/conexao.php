<?php

    $conn = mysqli_connect("localhost", "root", "", "sistemadecadastro");
    $conn->set_charset('utf8');

    if(!$conn){
        die("Falha de conexão" . mysqli_connect_error());
    }else{
        echo "Conexão realizada com sucesso";
    }
?>