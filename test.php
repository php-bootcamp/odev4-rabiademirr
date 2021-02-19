<?php

include "IQuery.php";
include "PDOConnector.php";
include "SQLQuery.php";
include "SQL.php";
include "SQLCrud.php";
include "MySQL.php";
include "PostgreSQL.php";

$db = new MySQL("localhost","8080", "root", " ", "mysql");

$query = (new SQLQuery())->setTable("users")->select()->addWhere("username", "=", ":user")->addBinding("user", "rabia");

$eray = $db->first($query);
