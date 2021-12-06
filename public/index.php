<?php
session_start();
spl_autoload_register(function ($class) {
    $fn = __DIR__ . '/../src/' . str_replace('\\', '/', $class) . '.php';
    require_once $fn;
});
use Controller\LogInController;
$response = '<h1>Menu</h1>';
if (empty($_SESSION['login'])) {
    $controller = new LogInController();
    $response = $controller->loginAction();
} else {
    $response = ''; // this is where you render the menu; could use the MenuController to produce the menu
}
// check $response 
echo $response;

