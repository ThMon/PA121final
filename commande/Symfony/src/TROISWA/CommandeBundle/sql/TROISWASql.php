<?php
namespace TROISWA\CommandeBundle\sql;

class TROISWASql
{
  public function selectAllInSql($sql, $execute) {
		$pdo = new \PDO('mysql:host=localhost;dbname=classicmodels;charset=UTF8','root','troiswa');

		$query = $pdo->prepare($sql);

		$query->execute( $execute );

		return $query->fetchAll(\PDO::FETCH_ASSOC);

	}


	public function selectOneInSql($sql, $execute) {
		$pdo = new \PDO('mysql:host=localhost;dbname=classicmodels;charset=UTF8','root','troiswa');

		$query = $pdo->prepare($sql);

		$query->execute( $execute );

		return $query->fetch(\PDO::FETCH_ASSOC);

	}

	public function executeInSql($sql, $execute) {
		
		$pdo = new \PDO('mysql:host=localhost;dbname=classicmodels;charset=UTF8','root','troiswa');

		$query = $pdo->prepare($sql);

		$query->execute( $execute );


	}
}