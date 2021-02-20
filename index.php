<?php
	include('conexao.php');
	$sql = "SELECT * FROM contatos";
	$result = mysqli_query($conexao,$sql);
?>
<html lang="pt-br">
	<body>
	<h1>Agenda Telefonica</h1>
	<h2>Contatos</h2>
		<table>
			<tr>
			<th>ID</th>
			<th>Nome</th>
			</tr>
		<?
		while ($row = mysqli_fetch_assoc($result)){
		?>
			<tr>
			<td><?= $row['id'] ?></td>
			<td><a href='editarContato.php?id=<?= $row['id'] ?>'> <?= $row['nome'] ?> </a></td>
			</tr>
		<? } ?>
		</table>
	</body>
</html>