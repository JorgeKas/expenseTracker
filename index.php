<?php

require "functions.php";
//require "router.php";
require "Database.php";

$config = require('config.php');

$db = new Database($config['database']);

$id = $_GET['id'];
$query = "SELECT * FROM transactions where id = ?";

$transactions = $db->query($query, [$id])->fetch();

// foreach ($transactions as $transaction) {
//     echo "<li>" . $transaction['date'] . $transaction['description'] . $transaction['amount'] . "</li>";
// }

dd($transaction);