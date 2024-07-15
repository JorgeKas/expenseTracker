<?php

require "functions.php";

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
  '/' => 'controllers/index.php',
  '/expenses' => 'controllers/expenses.php',
  '/income' => 'controllers/income.php',
  '/reports' => 'controllers/reports.php',
];

function abort($code) {
  http_response_code($code);
  require "views/{$code}.php";
}


if (array_key_exists($uri, $routes)) {
  require $routes[$uri];
} else {
  
}