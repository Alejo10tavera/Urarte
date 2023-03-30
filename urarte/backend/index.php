<?php 

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: POST');

require_once "controllers/template.controller.php";

$index = new TemplateController();
$index -> index();