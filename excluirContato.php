<?
	include('conexao.php');
	$id = $_GET['id'];
	$sql = "DELETE FROM contatos WHERE id=$id";
	$result = mysqli_query($conexao,$sql);
	if($result) {
	print "<h1>Contato excluído com sucesso!</h1>";
	} else {
	print "<h1>Não foi possível excluir o contato!</h1>";
	}
?>
<a href="index.php"><h4>Listar Contatos</h4></a>