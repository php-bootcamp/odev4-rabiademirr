<?php

include "SQLQuery.php";
include "PDOConnector.php";

abstract class SQL  {
use PDOConnector;

public  $connectionStatus=false;


public abstract function isConnected();



}





?>


