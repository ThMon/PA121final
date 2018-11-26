<?php

class LoginController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
    	/*
    	 * Méthode appelée en cas de requête HTTP GET
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $queryFields contient l'équivalent de $_GET en PHP natif.
    	 */

       
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
    	/*
    	 * Méthode appelée en cas de requête HTTP POST
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $formFields contient l'équivalent de $_POST en PHP natif.
    	 */
    	if (empty($_POST) == false) {


    		

            $userModel = new UserModel();
            $user      = $userModel->findWithEmailPassword
            (
                $_POST['email'],
                $_POST['password']
            );


            if(empty($user) == false) {
                $userModel->create
                (
                    $user['Id'],
                    $user['FirstName'],
                    $user['LastName'],
                    $user['Email'],
                    $user['Address'],
                    $user['ZipCode'],
                    $user['City']
                );

                $http->redirectTo('/');
            } else {
                echo 'votre email et/ou mot de passe sont incorrect';
            }
            

    
    	}


    }
}


?>