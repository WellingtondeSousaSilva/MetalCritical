<php 
    include_once 'form_alterar.php';
    include_once 'conexao.php';

    $id = $_GET['id_clie'];

    $nome = isset($_POST['nome']) ?$_POST['nome']:"";
    $email = isset($_POST['email']) ?$_POST['email']:"";
    $senha = isset($_POST['senha']) ?$_POST['senha']:"";
  
    $alterar = $conn->query("update sistema_de_cadastro set nome_clie ='$nome', eamil_clie ='email', senha_clie ='$senha' where id_clie ='$id'");

    if(mysql_affected_rows($conn) > 0){
        header("location: mostrar_consultar.php");
    }
?>