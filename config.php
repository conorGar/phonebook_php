<?php

/**
  * Configuration for database connection
  *
  */

$host       = "db4free.net"; //localhost"; 
$username   = "conorgar123";
$password   = "testpassword";
$dbname     = "phonebook_db"; 
$dsn        = "mysql:host=$host;dbname=$dbname"; 
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );

?>