<?php

require "functions.php";
//require "router.php";
require "Database.php";



$db = new Database();
$transactions = $db->query("SELECT * FROM transactions")->fetchAll(PDO::FETCH_ASSOC);

// foreach ($transactions as $transaction) {
//     echo "<li>" . $transaction['date'] . $transaction['description'] . $transaction['amount'] . "</li>";
// }

dd($transactions);