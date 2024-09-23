<?php

$config = require base_path('config.php');
$db = new Database($config['database']);

//$heading = "Expenses Reporting";

$transactions = $db->query("SELECT * FROM transactions")->get();


view('expenses/index.view.php', [
      'heading' => 'Expenses Reporting',
      'transactions' => $transactions,
    ]);