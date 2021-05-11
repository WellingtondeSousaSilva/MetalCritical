<?php

    include_once 'conexao.php';

    $consultar = $conn->query("select * from sistema_de_cadastro");

    while($dados = $consultar->fetch_assoc()){

        $id    = $dados['id_clie'];
        $nome  = $dados['nome_clie'];
        $email = $dados['email_clie'];
        $senha = $dados['senha_clie'];

        echo "<tr>";
            echo "<td>$id<td>$nome<td>$email<td>$senha";
            echo "<td><a href='form_alterar.php?id_clie=$id' class='btn'>Editar</a>";
            echo "<td><a href='delete.php?id_clie=$id' class='btn'>Excluir</a>";
        echo "</tr>";
    }

?>