<?php

class Database
{
  public $connection;

  public function __construct($config)
  {
    // To connect to MySQL db we need to create a new instance of the PDO class
    // The PDO class expects an argument (the connection string (dsn)) that contains the information needed to connect to the database
    $dsn = 'mysql:' . http_build_query($config, '', ';');

    // Database credentials
    $username = 'root';
    $password = 'QAZwsx123';
    $this->connection = new PDO($dsn, $username, $password, [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
  }

  public function query($query, $params =[])
  {
    // Effectively prepare the query to send to MySQL where it will be executed
    $statement = $this->connection->prepare($query);
    $statement->execute($params);

    // The remaining step is to fetch the results of the query
    // Using PDO::FETCH_ASSOC to return an array with only key-value and not indexed data
    return $statement;
  }
}