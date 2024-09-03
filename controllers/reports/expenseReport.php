<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = "Expense";

$id = $_GET['id'];

$transaction = $db->query("SELECT * FROM transactions WHERE id = :id", ['id' => $id])->fetch();

require "views/expenseReport.view.php";
