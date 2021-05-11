<?php 
	include_once 'conexao.php'; 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Formulário de Cliente</title>
	<meta charset="utf-8">
	<style type="text/css">
		.cadastro{
			margin: auto;
			width: 400px;
			height: 400px;
		}
		.cadastro table{
			margin: auto;
		}
	</style>
</head>
<body>

<?php 
	
	include_once 'conexao.php';

	$id = $_GET['id_cli'];

	$consultar = $conn->query("select * from sistema_de_cadastro where id_clie='$id'");

	while($dados = $consultar->fetch_assoc()){

		$nome 		= $dados['nome_clie'];
		$email 		= $dados['email_clie'];
		$senha 	    = $dados['senha_clie'];
		
	}

?>
	<div class="cadastro">
	<h1>Alterar dados do Cliente</h1>
	<form action="alterar.php?id_cli=<?php echo $id;?>" method="POST">
		<table>
			<tr>
				<td>Nome: <td><input type="text" name="nome" value="<?php echo $nome ?>" required></td>
			</tr>
			<tr>
				<td>Email: <td><input type="email" name="email" value="<?php echo $email ?>"required></td>
			</tr>
			<tr>
				<td>Senha: <td><input type="senha" name="senha" value="<?php echo $senha ?>" required></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="" value="Alterar">
			</tr>
			<tr>
				<td><a href="mostrar_consulta.php">Cancelar</a>
			</tr>
		</table>
	</form>
	</div>
</body>
</html>