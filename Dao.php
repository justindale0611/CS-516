<?php
class Dao
{
    private $host = "us-cdbr-iron-east-01.cleardb.net";
    private $dbname = "heroku_b0950797e204108";
    private $user = "b0d08fe860ed9e";
    private $password = "e9495ff9";
    
    private function getConnection()
    {
        $conn = new PDO("mysql:dbname={$this->dbname};host={$this->host};", "$this->user", "$this->password");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
    
    public function userExists($username)
    {
        $conn = $this->getConnection();
        $q    = $conn->prepare("SELECT * FROM users WHERE username = :username");
        $q->bindParam(':username', $username);
        $q->execute();
        if (!empty($q->fetch())) {
            return true;
        } else {
            return false;
        }
    }
    
    public function getConnectionStatus()
    {
        $conn = $this->getConnection();
        return $conn->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));
    }
    
    public function createAccount($username, $password)
    {
        $connection = $this->getConnection();
        $saveQuery  = "INSERT INTO users (username, password) VALUES (:username, :password)";
        $q   = $connection->prepare($saveQuery);
        $q->bindParam(":username", $username);
        $q->bindParam(":password", $password);
        $q->execute();
    }
    

    public function addWrestler($wname, $wphone, $wemail){
        $connection = $this->getConnection();
        $saveQuery  = "INSERT INTO wrestlers (wrestlersname, phone, email) VALUES (:name, :phone, :email)";
        $q   = $connection->prepare($saveQuery);
        $q->bindParam(":name", $wname);
        $q->bindParam(":phone", $wphone);
        $q->bindParam(":email", $wemail);
        $q->execute();
    }

	public function addParent($pname, $wname, $pphone, $pemail){
    	$connection = $this->getConnection();
        $saveQuery  = "INSERT INTO Parents (EmergencyContact, wrestlersname, phone, email) VALUES (:contact, :name, :phone, :email)";
        $q = $connection->prepare($saveQuery);
        $q->bindParam(":contact", $pname);        
        $q->bindParam(":name", $wname);
        $q->bindParam(":phone", $pphone);
        $q->bindParam(":email", $pemail);
        $q->execute();
	}


    public function validateUser($username, $password)
    {
        $conn = $this->getConnection();
        $q    = $conn->prepare("select username from users where username='$username' and password='$password'");
        $q->bindParam(":username", $username);
        $q->bindParam(":password", $password);
        $q->setFetchMode(PDO::FETCH_ASSOC);
        $q->execute();
        $result = $q->fetchAll();
        return $result;
    }
        public function getWrestler(){
      $conn=$this->getConnection();
        $q=$conn->prepare("SELECT wrestlersname, phone, email from wrestlers");
        $q->setFetchMode(PDO::FETCH_ASSOC);
        $q->execute();
        $result=$q->fetchAll();
        return $result;
      }
}
?>