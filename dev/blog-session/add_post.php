<?php
    session_start();

    if(array_key_exists('user', $_SESSION) == false) {
        header('Location: index.php');
        exit();
    }

    include 'application/bdd_connection.php';

    if(empty($_POST))
    {

    	$query = $pdo->prepare
		(
		    'SELECT
                *
            FROM
                Author'
		);

		$query->execute();


		$authors = $query->fetchAll(PDO::FETCH_ASSOC);

		$query = $pdo->prepare
		(
		    'SELECT
                Id,
                Name
            FROM
                Category'
		);

		$query->execute();


		$categories = $query->fetchAll(PDO::FETCH_ASSOC);

    	$template = 'add_post';
        include 'layout.phtml';
   
   } else {

   		
    	$query = $pdo->prepare
		(
		    ' INSERT INTO
                Post
                (Title, Contents, Author_Id, Category_Id, CreationTimestamp)
            VALUES
                (?, ?, ?, ?, NOW())'
		);

		$query->execute([$_POST['title'], $_POST['contents'], $_POST['author'], $_POST['category']]);


        header('Location: index.php');
        exit();

   }

