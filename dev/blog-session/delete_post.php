<?php

    if(array_key_exists('user', $_SESSION) == false) {
        header('Location: index.php');
        exit();
    }

	if(!array_key_exists('id', $_GET) OR !ctype_digit($_GET['id']))
    {
        header('Location: index.php');
        exit();
    }


    include 'application/bdd_connection.php';



	$query = $pdo->prepare
		(
		    'DELETE FROM
           	 	Post
        	WHERE
            	Id = ?'
		);

	$query->execute([$_GET['id']]);

	header('Location: admin.php');
    exit();