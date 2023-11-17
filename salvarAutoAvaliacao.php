<?php
use Controller\AutoAvaliacaoController;

require('config.php');
require('vendor/autoload.php');

$controller = new Controller\AutoAvaliacaoController();
$controller->save();