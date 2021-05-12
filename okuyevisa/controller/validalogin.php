<?php
session_start();
include_once("conexao.php");

$Telf=$_POST['Telf'];
$Senha=$_POST['Senha'];

$query = "SELECT * FROM user WHERE tele = '{$Telf}' AND senha = '{$Senha}' LIMIT 1";

$result = mysqli_query($conexao, $query);
$row = mysqli_fetch_assoc($result);

echo " Nome: ".$row['nome'];
echo"-";
echo"Senha: ".$row['tele'];

if($row == 1) {
	$_SESSION['tele'] = $Telf && $_SESSION['senha'];
	header('Location: admin.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: ../index.php');
    exit();
}
?>