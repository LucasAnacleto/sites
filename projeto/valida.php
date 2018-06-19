<?php include "conexao.php"; ?>
<?php 

session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

/*
$con = mysqli_connect('localhost:3306', 'root', '') or die("Falha na conexão!!");
mysqli_select_db($con, 'login') or die("Sem acesso ao DB, Entre em contato com o ADM");
*/

$resul = mysqli_query($conn, "SELECT * FROM `usuario` WHERE `NOME` = '$login' AND `SENHA` = '$senha'");

/*if (mysqli_num_rows($resul) > 0) {
	echo "FOI";
}else{
	echo "N FOI";
}*/



if (mysqli_num_rows($resul) > 0) {
	$_SESSION['login'] = $login;
	$_SESSION['senha'] = $senha;
	header('location:agendar.php');
}
else{
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:login.php');
}

 ?>