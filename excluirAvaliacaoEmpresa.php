<?php
use Controller\AvaliacaoEmpresaController;

require('config.php');
require('vendor/autoload.php');

$controller = new Controller\AvaliacaoEmpresaController();
$controller->remove();