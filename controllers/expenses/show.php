<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUserId = 9;


    $transaction = $db->query("SELECT * FROM transactions WHERE id = :id", [
      'id' => $_GET['id']])->findOrFail();

  authorize($transaction['user_id'] === $currentUserId);

  view('expenses/show.view.php', [
    'heading' => 'Expense',
    'transaction' => $transaction,
  ]);


