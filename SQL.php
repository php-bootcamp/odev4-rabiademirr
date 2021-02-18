<?php

include "SQLQuery.php";
include "PDOConnector.php";

abstract class SQL  {
use PDOConnector;

public  $connectionStatus=false;

public abstract function create(SQLQuery $query);
public abstract function update(SQLQuery $query);
public abstract function delete(SQLQuery $query);

public abstract function isConnected();



}





?>


