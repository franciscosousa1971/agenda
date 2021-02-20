<?
	include('conexao.php');
	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$id = $_POST['id'];
	$sql = "UPDATE contatos SET nome='$nome',
	email='$email', telefone='$telefone' WHERE id=$id";
	$result = mysqli_query($conexao,$sql);
	if($result) {
	print "<p>Contato alterado com sucesso!</p>";
	} else {
	print "<p>Alteração não realizada!</p>";
	}
?>
<a href="index.php"><p>Listar Contatos</p></a>