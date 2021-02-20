<?php
	$conexao = mysqli_connect("localhost", "root", "usbw");
	if ($conexao) {
		mysqli_select_db($conexao,"banco");
		print "Conexão realizada com sucesso";
	} else {
	print "Falha na conexão!";
	}
?>