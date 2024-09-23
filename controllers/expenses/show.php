<?php

$config = require base_path('config.php');
$db = new Database($config['database']);

//$heading = "Expense";
$currentUserId = 9;

$id = $_GET['id'];

$transaction = $db->query("SELECT * FROM transactions WHERE id = :id", ['id' => $id])->findOrFail();

authorize($transaction['user_id'] === $currentUserId);


view('expenses/show.view.php', [
  'heading' => 'Expense',
  'transaction' => $transaction,
]);
