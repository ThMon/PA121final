<?php
session_start();
 include 'application/bdd_connection.php';

 if(array_key_exists('user', $_SESSION) == false) {
        header('Location: index.php');
        exit();
    }

    if(empty($_POST))
    {
        // Validation de la query string dans l'URL.
        if(!array_key_exists('id', $_GET) OR !ctype_digit($_GET['id']))
        {
            header('Location: index.php');
            exit();
        }

        
        $query = $pdo->prepare(
        	'
            SELECT
                Id,
                Title,
                Contents
            FROM
                Post
            WHERE
                Id = ?
        	');
        $query->execute([$_GET['id']]);
        $post = $query->fetch(PDO::FETCH_ASSOC);

        // Sélection et affichage du template PHTML.
        $template = 'edit_post';
        include 'layout.phtml';
    }
    else
    {
        // Edition d'un article du blog.
       $query = $pdo->prepare(
        	'
            UPDATE
                Post
            SET
                Title = ?,
                Contents = ?
            WHERE
                Id = ?
        '
        );
        $query->execute([$_POST['title'], $_POST['contents'], $_POST['postId']]);

        // Retour au panneau d'administration.
        header('Location: admin.php');
        exit();
    }
?>