<?php
use Controller\PlanoAtividadeController;

require('config.php');
require('vendor/autoload.php');

$controller = new Controller\PlanoAtividadeController();
$controller->save();