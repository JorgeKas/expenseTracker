<?php

$heading = 'Create a new Expense';

$errors = [];


view('expenses/create.view.php', [
      'heading' => 'Create a new Expense',
      'errors' => $errors ?? [],
    ]);