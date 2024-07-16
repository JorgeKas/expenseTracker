<?php

class Database
{
  public $connection;

  public function __construct()
  {
    // To connect to MySQL db we need to create a new instance of the PDO class
    // The PDO class expects an argument (the connection string (dsn)) that contains the information needed to connect to the database
    $dsn = "mysql:host=10.0.20.45;port=3306;dbname=expense_tracking;charset=utf8mb4";

    // Database credentials
    $username = 'root';
    $password = 'QAZwsx123';
    $this->connection = new PDO($dsn, $username, $password);
  }

  public function query($query)
  {
    // Effectively prepare the query to send to MySQL where it will be executed
    $statement = $this->connection->prepare($query);
    $statement->execute();

    // The remaining step is to fetch the results of the query
    // Using PDO::FETCH_ASSOC to return an array with only key-value and not indexed data
    return $statement;
  }
}