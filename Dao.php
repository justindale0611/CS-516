<?php
class Dao {
	private $host = "us-cdbr-iron-east-01.cleardb.net";
	private $dbname = "heroku_b0950797e204108";
	private $user = "b0d08fe860ed9e";
	private $password = "e9495ff9";

	private function getConnection() {
		$conn = new PDO ( "mysql:dbname={$this->dbname};host={$this->host};", "$this->user", "$this->password" );
		$conn->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		return $conn;
	}

	public function getConnectionStatus() {
		$conn = $this->getConnection();
		return $conn->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));
	}

	// public function saveLogin($name, $password) {
	// 	$connection =$this->getConnection();
	// 	 $saveQuery =
	//         "INSERT INTO users (name, password)
	//         VALUES (:name, :comment)";
	//     $q = $conn->prepare($saveQuery);
	//     $q->bindParam(":name", $name);
	//     $q->bindParam(":password", $password);
	//     $q->execute();
	// }

	//MAYBE SOMETHING IS WRONG HERE
	public function validateUser($username, $password) {//error
		$conn=$this->getConnection();
		$q=$conn->prepare("select username from user where username='$username' and password='$password'");
		$q->bindParam(":username", $username);
		$q->bindParam(":password", $password);
		$q->setFetchMode(PDO::FETCH_ASSOC);
		$q->execute();
		$result=$q->fetchAll();
		return $result;
	}
}
?>