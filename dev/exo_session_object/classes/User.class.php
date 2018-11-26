<?php

class User extends Database {

	

	public function saveUser($firstname, $lastname, $email, $password) {

		$sql = ' INSERT INTO
                users
                (FirstName, LastName, Email, Password)
            VALUES
                (?, ?, ?, ?)';

        $execute = array($firstname, $lastname, $email, $password);


        $this->executeInSql($sql, $execute);

	}


	public function createSession($mail, $password) {
		$user =  $this->selectOneInSql(
			'SELECT
	            *
             FROM
              	users
             WHERE Email = ?', 
        [ $mail ]
        );

        if( $user['Password'] == $password && $user != false ) {
    	
	        $_SESSION['user']['FirstName'] = $user['FirstName'];
			$_SESSION['user']['LastName'] = $user['LastName'];
	        $_SESSION['user']['Email'] = $user['Email'];
	        
	        echo 'Connecté';
	        
	        var_dump($_SESSION);
	    	header('Location: index.php');
	        exit();
   	 	} else {
   	 		echo 'login ou mot de passe incorrect'
   	 	}
	}

	public function logoutSession() {
		session_destroy();

		header('Location: index.php');
		exit();

	}


}



?>