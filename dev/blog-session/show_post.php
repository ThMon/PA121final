<?php
session_start();

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
		    'SELECT
            Post.Id,
            Title,
            Contents,
            CreationTimestamp,
            FirstName,
            LastName
	        FROM
	            Post
	        INNER JOIN
	            Author
	        ON
	            Post.Author_Id = Author.Id
	        WHERE
	            Post.Id = ?'
		);

	$query->execute([$_GET['id']]);


	$post = $query->fetch(PDO::FETCH_ASSOC);

	


	$query = $pdo->prepare
		(
		    'SELECT
            NickName,
            Contents,
            CreationTimestamp
	        FROM
	            Comment
	        WHERE
	            Post_Id = ?'
		);

	$query->execute([$_GET['id']]);


	$comments = $query->fetchAll(PDO::FETCH_ASSOC);



	$template = 'show_post'; 
	include 'layout.phtml';