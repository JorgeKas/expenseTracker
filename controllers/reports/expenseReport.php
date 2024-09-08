<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = "Expense";
$currentUserId = 9;

$id = $_GET['id'];

$transaction = $db->query("SELECT * FROM transactions WHERE id = :id", ['id' => $id])->findOrFail();

authorize($transaction['user_id'] === $currentUserId);


require "views/expenseReport.view.php";
