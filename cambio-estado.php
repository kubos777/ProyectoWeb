<?php
session_start();

if (!isset($_SESSION['nickname'])) {
	header('location: ./index.php');
	exit();
}
else{
	require 'db.php';
	$pdo = Database::connect();

	$sql = 'SELECT estado FROM Asistencia WHERE nickname=\''.$_SESSION['nickname'].'\'';
    foreach ($pdo->query($sql) as $row) {
      	$estado = $row['estado'];
    }

    if ($estado == 'inactivo'){
	    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $sql = "INSERT INTO Asistencia (nickname,nombre,apellido,estado) values(?,?,?,?)";
	    $q = $pdo->prepare($sql);
	    $q->execute(array($_SESSION['nickname'],$_SESSION['nombre'],$_SESSION['apellido_p'],'activo'));	
	    Database::disconnect();
	    header('location: ./index.php');
	}
	else{    
	    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $sql = "INSERT INTO Asistencia (nickname,nombre,apellido,estado) values(?,?,?,?)";
	    $q = $pdo->prepare($sql);
	    $q->execute(array($_SESSION['nickname'],$_SESSION['nombre'],$_SESSION['apellido_p'],'inactivo'));
	    Database::disconnect();
	    header('location: ./index.php');
	    exit();	
	}
}
?>