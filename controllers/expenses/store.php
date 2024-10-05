<?php


use Core\Database;
use Core\Validator;


require base_path('Core/Validator.php');


$config = require base_path('config.php');
$db = new Database($config['database']);

$heading = 'Create a new Expense';


  $errors = [];
  $required_fields = [
    'date' => 'Date is required', 
    'amount' => 'Amount is required', 
    'description' => 'Description is required or it exceeds max. # of characters',
    ];

    foreach ($required_fields as $field => $error_message) {
    // Laracast Logic
    if (!Validator::string($_POST[$field], 1, 150)) {
      $errors[] = $error_message;
    }

    // My Logic 10/09/2024
    // if (empty($_POST[$field])) {  
    //   $errors[] = $error_message;
    // }

    // if (strlen($_POST[$field]) > 255) {
    //   $errors[] = 'Field(s) cannot be more than 255 characters long';
    // }
  }

if (!empty($errors)) {
  return view('expenses/create.view.php', [
    'heading' => 'Create a new Expense',
    'errors' => $errors ?? [],
  ]);

} 

  
    $db->query('INSERT INTO transactions (date, amount, description, details, user_id) VALUES (:date, :amount, :description, :details, :user_id)', [
      'date' => $_POST['date'],
      'amount' => $_POST['amount'],
      'description' => $_POST['description'],
      'details' => $_POST['details'],
      'user_id' => 9
    ]);
  

// after creating the record in the db, redirect to list with all records
header('Location: /expenseReporting');
// view('expenses/create.view.php', [
//       'heading' => 'Create a new Expense',
//       'errors' => $errors ?? [],
//     ]);