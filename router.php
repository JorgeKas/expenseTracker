<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
'/' => 'controllers/index.php',
'/expenses' => 'controllers/expenses.php',
'/income' => 'controllers/income.php',
'/reports' => 'controllers/reports.php',
'/expenseReporting' => 'controllers/reports/expenseReports.php',
'/incomeReporting' => 'controllers/reports/incomeReports.php',
];


function routeToController($uri, $routes) {
if (array_key_exists($uri, $routes)) {
require $routes[$uri];
} else {
abort();
}
}

function abort($code = 404)
{
http_response_code($code);
require "views/{$code}.php";
die();
}

routeToController($uri, $routes);