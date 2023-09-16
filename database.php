<?php
class Database{
	private $connection;
	function __construct()
	{
		$this->connect_db();
	}
	public function connect_db(){
		$this->connection = mysqli_connect('localhost','root','','mywebsite');
		if(mysqli_connect_error()){
			die("<hr> <br>Database Connection Failed<br>" . mysqli_connect_error() ."<br>". mysqli_connect_errno());
		}
	}
	public function read($id=null){
		$sql = "SELECT * FROM `users`";
		if($id){ $sql .= " WHERE id=$id";}
 		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}
	public function update($username,$email,$password, $id){
		$sql = "UPDATE `users` SET username='$username', email='$email', password='$password' WHERE id=$id";
		$res = mysqli_query($this->connection, $sql);
		if($res){
			return true;
		}
		else{
			return false;
		}
	}
	public function delete($id){
		$sql = "DELETE FROM `users` WHERE id=$id";
 		$res = mysqli_query($this->connection, $sql);
 		if($res){
 			return true;
 		}else{
 			return false;
 		}
	}
	public function sanitize($var){
		$return = mysqli_real_escape_string($this->connection, $var);
		return $return;
	}
}
$database = new Database();
?>