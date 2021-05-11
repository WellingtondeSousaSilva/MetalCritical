<php 
    include_once 'conexao.php';

    $id = $_GET['id_clie'];

    $deletar = $conn->query("delete from sistema_de_cadastro where id_clie ='id'");

    if(mysli_affected_rows($conn) > 0){

        header("location:moatrar_consultar.php");
    }
?>