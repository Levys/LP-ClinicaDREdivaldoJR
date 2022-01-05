<?php 
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

if (!($nome) || !($email) || !($telefone)){
	print "Preencha todos os campos!"; exit();
}
//Abrindo Conexao com o banco de dados
$conexao = mysqli_connect("localhost", "root", "", "teste_bd_moa") or die (mysqli_error());

//Utilizando o  mysql_real_escape_string voce se protege o seu código contra SQL Injection.
$nome = mysqli_real_escape_string($conexao, $nome);
$email = mysqli_real_escape_string($conexao, $email);
$telefone = mysqli_real_escape_string($conexao, $telefone);

$insert = mysqli_query($conexao, "INSERT INTO contacts_msgs (nome,email,telefone) VALUES ('{$nome}','{$email}','{$telefone}')");
mysqli_close($conexao);
?>