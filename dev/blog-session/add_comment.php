<?php

    include 'application/bdd_connection.php';

    var_dump($_POST);

    // Ajout d'un commentaire à un article du blog.
    $query = $pdo->prepare
        (
            'INSERT INTO
            Comment
            (NickName, Contents, Post_Id, CreationTimestamp)
        VALUES
            (?, ?, ?, NOW())'
        );

    $query->execute([$_POST['nickName'], $_POST['contents'], $_POST['postId']]);

    header('Location: show_post.php?id='.$_POST['postId']);
    exit();