<?php
include "SQL.php";
include "SQLCrud.php";

class PostgreSQL extends SQL
{
use SQLCrud;


private $host="localhost";
private $port=8080;
private $username="root1";
private $password=" ";
private $database="postgresql";


 public function __construct($host,$port,$username,$password,$database) 
 {
 	$this->host=$host;
 	$this->port=$port;
 	$this->username=$username;
 	$this->password=$password;
 	$this->database=$database;

 }
 public function __destruct(){
 	//echo "this is destruct";
 }
	
}

















?>


