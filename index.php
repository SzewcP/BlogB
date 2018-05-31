<?php
session_start();
//include config

require('config.php');
require('classes/MainController.php');
require('classes/Controller.php');

require('classes/Model.php');
require('controllers/home.php');
require('controllers/users.php');

require('controllers/posts.php');
require('models/home.php');
require('models/posts.php');
require('models/user.php');


$mainController = new MainController($_GET);
$controller = $mainController->createController();

if($controller)
{
    $controller->executeAction();
}
