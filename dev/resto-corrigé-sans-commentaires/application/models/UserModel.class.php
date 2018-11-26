<?php


class UserModel {

	    public function signUp(
        $lastName,
        $firstName,
        $email,
        $password,
        $birthDate,
        $address,
        $city,
        $zipCode,
        $phone)
    {
        $database = new Database();

        // On vérifie qu'il y a un utilisateur avec l'adresse e-mail spécifiée.
        $user = $database->queryOne
        (
            "SELECT Id FROM User WHERE Email = ?", [ $email ]
        );

        // Est-ce qu'on a bien trouvé un utilisateur ?
       

        $hashPassword = $this->hashPassword($password);

        $sql = "INSERT INTO User
		(
			LastName,
			FirstName,
			Email,
			Password,
			BirthDate,
			CreationTimestamp,
			Address,
			City,
			ZipCode,
			Phone
		) VALUES (?, ?, ?, ?, ?, NOW(), ?, ?, ?, ?)";

    

        $database->executeSql($sql,
        [
            $lastName,
            $firstName,
            $email,
            $hashPassword,
            $birthDate,
            $address,
            $city,
            $zipCode,
            $phone
        ]);

     
    }

    public function findWithEmailPassword($email, $password)
    {
        $database = new Database();

        // Récupération de l'utilisateur ayant l'email spécifié en argument.
        $user = $database->queryOne
        (
            "SELECT
                *
            FROM User
            WHERE Email = ?",
            [ $email ]
        );

        // Est-ce qu'on a bien trouvé un utilisateur ?
        
        // Est-ce que le mot de passe spécifié est correct par rapport à celui stocké ?
    	if($this->verifyPassword($password, $user['Password']) == true)
    	{
			return $user;
    	} else {
    		echo 'Pas le bon Mot de passe';
    	}

		
    }


    private function hashPassword($password)
    {
        
        $salt = '$2y$11$'.substr(bin2hex(openssl_random_pseudo_bytes(32)), 0, 22);

        return crypt($password, $salt);
    }

    private function verifyPassword($password, $hashedPassword)
	{
        // Si le mot de passe en clair est le même que la version hachée alors renvoie true.
		return crypt($password, $hashedPassword) == $hashedPassword;
	}


    public function create($userId, $firstName, $lastName, $email, $address, $zip, $city)
    {
        // Construction de la session utilisateur.
        $_SESSION['user'] =
        [
            'UserId'    => $userId,
            'FirstName' => $firstName,
            'LastName'  => $lastName,
            'Email'     => $email,
            'Address'   => $address,
            'ZipCode'   => $zip,
            'City'      => $city
        ];
    }

    public function find($userId)
    {
    	$database = new Database();

    	// Récupération de l'utilisateur spécifié.
    	return $database->queryOne
    	(
    		"SELECT
    			*
			FROM User
			WHERE Id = ?",
    		[ $userId ]
    	);
    }



}



?>