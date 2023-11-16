<?php
use Controller\TCCController;

require('config.php');
require('vendor/autoload.php');

$controller = new Controller\TCCController();
$controller->remove();
