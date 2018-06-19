<?php include "conexao.php"; ?>

<?php

session_start();

$nome = $_POST['login'];
$senha = $_POST['senha'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];


$query = "INSERT INTO usuario (NOME, SENHA, SOBRENOME, EMAIL, TELEFONE) 
	VALUES ('$nome', '$senha', '$sobrenome', '$email', '$telefone')";

$ok = mysqli_query($conn,$query);

if($ok){
	echo "<script>alert('Cadastro feito com sucesso') ;  window.location.replace('login.php')</script>";
} else {
	echo "Não cadastrado - ";
	$ERRO = mysqli_error($conn);
	echo $ERRO;
}
/* if($ok == true){
		header('location:login.php');
	}
else {
	echo "Não cadastrado - ";
	$ERRO = mysqli_error($conn);
	echo $ERRO;	
}*/

mysqli_close($conn);
?>