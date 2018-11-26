<?php
session_start();
include 'application/lib.php';

if(empty($_POST) == false) {

	var_dump($_POST);

	$hashPassword = hashPassword($_POST['Password']);

	include 'application/bdd_connection.php';
    
    $query = $pdo->prepare
		(
		    ' INSERT INTO
                users
                (FirstName, LastName, Email, Password)
            VALUES
                (?, ?, ?, ?)'
		);

	$query->execute([$_POST['FirstName'], $_POST['LastName'], $_POST['Email'], $hashPassword]);

	header('Location: login.php');
    exit();
}

$template = 'register';
include 'layout.phtml';

?>