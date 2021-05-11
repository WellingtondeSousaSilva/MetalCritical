<?php 
	session_start();
?>

<?php 

	if (isset($_SESSION['logado'])):

?>
	<h1> Usuário Logado com sucesso</h1>
	<a href="sair.php">Sair do Sistema</a>

<?php 
	else:
?>
	<h1>Página Restrita, Tente novamente.</h1>
	<a href="home.php">Logar ao Sistema</a>

<?php 
	endif;
?>