<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Create a new Expense';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $errors = [];
  $required_fields = [
    'date' => 'Date is required', 
    'amount' => 'Amount is required', 
    'description' => 'Description is required'
  ];

  foreach ($required_fields as $field => $error_message) {
    if (empty($_POST[$field])) {  
      $errors[] = $error_message;
    }

    if (strlen($_POST[$field]) > 255) {
      $errors[] = 'Field(s) cannot be more than 255 characters long';
    }

  }
  if (empty($errors)) {
    $db->query('INSERT INTO transactions (date, amount, description, details, user_id) VALUES (:date, :amount, :description, :details, :user_id)', [
      'date' => $_POST['date'],
      'amount' => $_POST['amount'],
      'description' => $_POST['description'],
      'details' => $_POST['details'],
      'user_id' => 9
    ]);
  }
}

  // if (strlen($_POST['date']) === 0 || strlen($_POST['amount']) === 0 || strlen($_POST['description']) === 0) {
  //   // if any of the fields are empty, add an error message to the $errors array. How to male all 3 fields on the same line?
  //   $errors['date'] = 'Date is required';
  //   $errors['amount'] = 'Amount is required';
  //   $errors['description'] = 'Description is required';
  //   }


require 'views/expense-create.view.php';