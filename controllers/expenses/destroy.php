<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUserId = 9;

// Perform an authorization check
$transaction = $db->query("SELECT * FROM transactions WHERE id = :id", [
  'id' => $_POST['id']
])->findOrFail();

// If authorization check passes, delete the transaction
authorize($transaction['user_id'] === $currentUserId);

$db->query('DELETE FROM transactions WHERE id = :id', [
  'id' => $_POST['id']
]);

header('Location: /expenseReporting');
exit();

