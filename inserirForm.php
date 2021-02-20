<h1>Inserindo um valor</h1>
<?
	include('conexao.php');
	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];

	$sql = "INSERT INTO contatos
	VALUES (NULL, '$nome', '$email', '$telefone')";
	$resultado = mysqli_query($conexao,$sql);
	if ($resultado) {
	print "<p>Valor inserido com sucesso!</p>";
	} else {
	print "<p>Não foi possível inserir...</p>";
	}
?>