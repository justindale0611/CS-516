<?php
class Dao {
	private $host = "us-cdbr-iron-east-01.cleardb.net";
	private $db = "heroku_b0950797e204108";
	private $user = "b0d08fe860ed9e";
	private $pass = "e9495ff9";

	public function getConnection () {
		return new PDO("mysql:host={$this->host};dbname={$this->db}")
	}

	public function saveLogin($name, $password) {
		$connection =$this->getConnection();
		 $saveQuery =
	        "INSERT INTO users (name, password)
	        VALUES (:name, :comment)";
	    $q = $conn->prepare($saveQuery);
	    $q->bindParam(":name", $name);
	    $q->bindParam(":password", $password);
	    $q->execute();
	}

	//MAYBE SOMETHING IS WRONG HERE
	public function validateUser($username, $password) {
		$conn = $this->getConnection();
		$stmt = $conn->prepare("SELECT id, username, password FROM users WHERE users = :username");

		$stmt->bindParam(':username', $username);	
		$stmt->execute();

		$user = $stmt->fetch();
		if ($user) {
			$digest = $user['password'];
			if (password_verify($password, $digest)) {
				return array('username' => $user['username'], 'id' => $user['id']);
			}
		} 
		return false;
	}
}
?>