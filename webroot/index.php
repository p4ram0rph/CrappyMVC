<?php


require '../lib/bootstrap.php';


$router = new Router();

$router->redirect( $_GET['p'] );
