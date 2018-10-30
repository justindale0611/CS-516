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
		$conn = $this->getConnection();
		$stmt = $conn->prepare("SELECT username FROM users WHERE username = :username");

		$stmt->bindParam(':username', $username);	
		$stmt->execute();

		$user = $stmt->fetch();
		if ($user) {

			$digest = $user['password'];
			if (password_verify($password, $digest)) {
				return array('username' => $user['username'], 'id' => $user['id']);
			}
			return true;
		} 
		return false;
	}
}
?>