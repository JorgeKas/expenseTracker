<?php

require "functions.php";
//require "router.php";
require "Database.php";

$config = require('config.php');

$db = new Database($config['database']);
$transactions = $db->query("SELECT * FROM transactions")->fetchAll();

// foreach ($transactions as $transaction) {
//     echo "<li>" . $transaction['date'] . $transaction['description'] . $transaction['amount'] . "</li>";
// }

dd($transactions);