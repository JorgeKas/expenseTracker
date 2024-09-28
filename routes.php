<?php

// return [
//   '/' => 'controllers/index.php',
//   '/expenses-mn' => 'controllers/expenses-mn.php',
//   '/income' => 'controllers/income.php',
//   '/expense-create' => 'controllers/expenses/create.php',
//   '/reports' => 'controllers/reports.php', // not used currently
//   '/detailed-expense' => 'controllers/expenses/show.php',
//   '/expenseReporting' => 'controllers/expenses/index.php',
//   '/incomeReporting' => 'controllers/expenses/incomeReport.php',
// ];

// Root of Project
$router->get('/', 'controllers/index.php');
// Expense Menu Option
$router->get('/expenses-mn', 'controllers/expenses-mn.php');
// Income Menu Option
$router->get('/income', 'controllers/income.php');
// Show list w/ all expenses
$router->get('/expenseReporting', 'controllers/expenses/index.php');
//Show single expense
$router->get('/detailed-expense', 'controllers/expenses/show.php');
// Delete an expense
$router->delete('/detailed-expense', 'controllers/expenses/destroy.php');
// Create an Expense - show the form
$router->get('/expense-create', 'controllers/expenses/create.php');
// show the form to create a new expense
$router->post('/expense-create', 'controllers/expenses/store.php');