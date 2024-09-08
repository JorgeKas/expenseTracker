<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Create a new Expense';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db->query('INSERT INTO transactions (date, amount, description, details, user_id) VALUES (:date, :amount, :description, :details, :user_id)', [
        'date' => $_POST['date'],
        'amount' => $_POST['amount'],
        'description' => $_POST['description'],
        'details' => $_POST['details'],
        'user_id' => 9
    ]);

    header('Location: /expenses');
}

require 'views/expense-create.view.php';