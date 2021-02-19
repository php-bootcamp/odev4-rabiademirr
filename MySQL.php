<?php
include "SQL.php";
include "SQLCrud.php";

class MySQL  extends SQL
{
use SQLCrud;


private $host="localhost";
private $port=8080;
private $username="root";
private $password=" ";
private $database="mysql";


 public function __construct($host,$port,$username,$password,$database) 
 {
 	$this->host=$host;
 	$this->port=$port;
 	$this->username=$username;
 	$this->password=$password;
 	$this->database=$database;

 }
 public function __destruct(){
 	echo "this is destruct";
 }
	
}





?>

