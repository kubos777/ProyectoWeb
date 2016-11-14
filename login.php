<?php
    if ( empty($_POST['nickname']) || empty($_POST['password'] )) {
        header("location: ./error.php");
        exit();
    } else {
        session_start();
    	require 'db.php';
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM Becario where nickname='".$_POST['nickname']."'";
        $q = $pdo->prepare($sql);
        $q->execute();
        $data = $q->fetch(PDO::FETCH_ASSOC);
        Database::disconnect();
        
        if($data['password'] == $_POST['password']) {
        	session_start();
			$_SESSION['nickname'] = $data['nickname'];
			$_SESSION['nombre'] = $data['nombre'];
            $_SESSION['nombre'] = $data['apellido_p'];
            $_SESSION['nombre'] = $data['apellido_m'];
			$pdo = Database::connect();
			header('location: ./index.php');
        	exit();
        }
        else {
        	header('location:./error.php');
        	exit();
        }
    } 
?>