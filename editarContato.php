<h1>Editar Contato</h1>
<?
	include('conexao.php');
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM contatos where id=$id";
	$result = mysqli_query($conexao,$sql);
	$row = mysqli_fetch_assoc($result);
?>
	<form action="alterarContato.php" method="post">
		<p>Id:
			<input type="text" name="id" readonly="true"
			value="<?= $row['id'] ?>"/></p>
		<p>Nome:
			<input type="text" name="nome"
			value="<?= $row['nome'] ?>"/></p>
		<p>Email:
			<input type="text" name="email"
			value="<?= $row['email'] ?>"/></p>
		<p>Telefone:
			<input type="text" name="telefone"
			value="<?= $row['telefone'] ?>"/></p>
		<input type="button"
		onclick="javascript:history.go(-1);" value="Voltar"/>
		<input type="submit" value="Alterar"/>
		<a href="excluirContato.php?id=<?= $row['id'] ?>">Excluir Contato</a>
	</form>