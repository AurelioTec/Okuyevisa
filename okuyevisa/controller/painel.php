<?php
session_start();
if(!$_SESSION['tele'] || !$_SESSION['senha'] ) {
	header('Location: ../index.php');
	exit();
}