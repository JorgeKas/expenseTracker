<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = "Expenses Reporting";

$transactions = $db->query("SELECT * FROM transactions")->fetchAll();


require "views/expenseReports.view.php";