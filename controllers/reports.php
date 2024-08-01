<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = "Reports";

//$transactions = $db->query("SELECT * FROM transactions")->fetchAll(); --> this is not needed anymore in this controller. Transfer to expenseReports.php
//make different queries for expenses and income on separate controllers

require "views/reports.view.php";