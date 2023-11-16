<?php
use Controller\TermoCompromissoController;

require('config.php');
require('vendor/autoload.php');

$controller = new Controller\TermoCompromissoController();
$controller->save();