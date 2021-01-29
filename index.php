<?php
/**
 * @authors Shawn Potter & Ryan Hendrickson
 * @version https://github.com/rynhndrcksn/pets2
 * more pets
 */

// This is our Controller

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once('vendor/autoload.php');

$f3 = Base::instance();

// turn on Fat-Free error reporting
$f3->set('DEBUG', 3);

$f3->route('GET /', function () {
	//echo 'My Pets';
    $view = new Template();
    echo $view->render("views/pet-home.html");
});

$f3->route('GET /order', function () {
	$view = new Template();
	echo $view->render("views/pet-order.html");
});
  $f3->route('POST /order2', function () {
    var_dump($_POST);
    $view = new Template();
    echo $view->render("views/pet-order2.html");
  });

$f3->run();

