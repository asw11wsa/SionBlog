<?php
require_once $_SERVER['DOCUMENT_ROOT']."/vendor/autoload.php";

use Css\CssController;

$write = new CssController();

$write->deleteCss($_POST['id']);