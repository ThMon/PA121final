<?php

class Database {


	public function selectAllInSql($sql, $execute) {
		$pdo = new PDO('mysql:host=localhost;dbname=session', 'root', 'troiswa');
		$pdo->exec('SET NAMES UTF8');

		$query = $pdo->prepare($sql);

		$query->execute( $execute );

		return $query->fetchAll(PDO::FETCH_ASSOC);

	}


	public function selectOneInSql($sql, $execute) {
		$pdo = new PDO('mysql:host=localhost;dbname=session', 'root', 'troiswa');
		$pdo->exec('SET NAMES UTF8');

		$query = $pdo->prepare($sql);

		$query->execute( $execute );

		return $query->fetch(PDO::FETCH_ASSOC);

	}

	public function executeInSql($sql, $execute) {
		$pdo = new PDO('mysql:host=localhost;dbname=session', 'root', 'troiswa');
		$pdo->exec('SET NAMES UTF8');

		$query = $pdo->prepare($sql);

		$query->execute( $execute );


	}



}




?>