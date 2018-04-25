<?php

 

  $str = 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8mb4';

  try

  {

    $pdo = new PDO($str, DB_USER, DB_PASSWORD, array(PDO::ATTR_PERSISTENT => true));

  }

  catch (PDOException $e)

  {

    print "Error!: " . $e->getMessage() . "<br/>";

    die();

  }
  
  echo "test";

 

?>